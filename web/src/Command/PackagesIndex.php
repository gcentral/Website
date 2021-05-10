<?php

namespace App\Command;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\ORM\EntityManagerInterface;

use Carbon\Carbon;

use App\Entity\DeveloperGroup;
use App\Entity\Package;
use App\Entity\PackageRepo;
use App\Entity\PackageVersion;
use App\Repository\DeveloperGroupRepository;
use App\Repository\PackageRepoRepository;

use App\Service\PackageService;
use App\Service\RepoService;

class PackagesIndex extends Command
{
    private $ps; //PackageService
    private $pkgRepo;
    private $devRepo;

    private $out; //OutputInterface

    private $em; //EntityManagerInterface

    public function __construct(PackageService $ps, PackageRepoRepository $pkgRepo, EntityManagerInterface $em, DeveloperGroupRepository $devRepo) {
        parent::__construct();
        $this->ps = $ps;
        $this->pkgRepo = $pkgRepo;
        $this->em = $em;
        $this->devRepo = $devRepo;
    }

    protected function configure()
    {
        $this
            ->setName('packages:index')
            ->setDescription('Indexes packages from the various repositories.')
        ;
    }

    protected function execute(InputInterface $in, OutputInterface $out)
    {
        $this->out = $out;
        $repos = $this->pkgRepo->findAll();

        $out->writeln("Starting package indexing");
        $out->writeln("\nEnabled repos:");

        foreach($repos as $repo) {
            if ($repo->getEnabled()) {
                $out->writeln($repo->getName() . ' -> ' . $repo->getIndexUrl());
            }
        }

        foreach($repos as $repo) {
            if ($repo->getEnabled()) {
                $url = parse_url($repo->getIndexUrl());

                switch ($url['scheme']) {
                    case 'gpm-nidb':
                        $out->writeln("gpm-nidb handling not implemented yet.");
                        break;

                    case 'vipm-zip':
                        $this->indexVipmZip($repo);
                        break;
                }
            }
        }

        return Command::SUCCESS;
    }

    private function indexVipmZip($repo) {    
        $sep = DIRECTORY_SEPARATOR;

        $this->out->writeln("\n=== Checking " . $repo->getName() . '===');
        //fix url to normal http request format
        $url = str_replace("vipm-zip", "http", $repo->getIndexUrl());
        $baseUrl = substr($url, 0, strrpos($url, '/', -1) + 1);

        $this->out->writeln('url: ' . $url);
        $this->out->writeln('baseUrl: ' . $baseUrl);

        //First check date returned by headers
        $headers = get_headers($url);
        //$this->out->writeln(print_r($headers, true));

        $lastMod = $this->parseLastModified($headers)->shiftTimezone('UTC');
        $this->out->writeln("Last modified: " . $lastMod->toIsoString());

        $this->out->write("Last Updated: ");
        $lastUpdate = $repo->getLastUpdate();

        $needsUpdate = true;
        $updateIsNull = is_null($lastUpdate);

        //Last Update can be null in the DB if it's a new Repo entry
        //Otherwise compare dates to see if we need to download the file and check the stored release date
        if ($updateIsNull) {
            $this->out->writeln("Never");
        } else {
            $this->out->writeln($lastUpdate->toIsoString());
            $needsUpdate = $lastUpdate < $lastMod;
        }

        if ($needsUpdate) {
            $this->out->writeln("Repo index release needs to be checked.");
        } else {
            $this->out->writeln("Repo is up to date.");
            return;
        }

        //Since we need to update we'll download the package index and check its update time
        $pkgRoot = $this->packagesRootPath();
        $repoName = $this->repoFolderName($repo);

        //Path to download package index file
        //All archives go in the archive folder and will then be extracted to an organized index
        if (!is_dir($pkgRoot . '/archive')) {
            mkdir($pkgRoot . '/archive', 0777, true);
        }

        $dlPath = $pkgRoot . '/archive/' . $repoName . '.zip';
        $this->out->writeln("Downloading archive to " . $dlPath);
        //$dlPath = realpath($dlPath);
        //$this->out->writeln("Fixed path: " . $dlPath);

        if (!file_put_contents($dlPath, file_get_contents($url))) {
            $this->out->writeln("\n!! Unable to download archive for " . $repo->getName());
            return;
        }

        $this->out->writeln($repo->getName() . " archive downloaded.");

        $zip = new \ZipArchive();
        if (!$zip->open($dlPath)) {
            $this->out->writeln("\n!! Unable to open archive for " . $repo->getName());
            return;
        }

        //Index files will go in an index and repo name folder
        //Create the folder if it doesn't exist yet
        $indexPath = $pkgRoot . '/index/' . $repoName;
        if (!file_exists($indexPath)) {
            mkdir ($indexPath, 0777, true);
            mkdir ($indexPath . '/spec', 0777, true);
        }

        $indexPath = realpath($indexPath);
        $this->out->writeln("Index path: " . $indexPath);

        //Extract the zip to get the index file
        $zip->extractTo($indexPath);
        $index = scandir($indexPath)[2];
        $this->out->writeln(print_r($index, true));
        $this->out->writeln("Index: " . $index);

        //Rename the index file to index.ini for consistency
        rename($indexPath . '/' . $index, $indexPath . '/index.ini');
        $indexFile = realpath($indexPath . '/index.ini');

        //read in index ini
        //The format isn't *quite* compatible with standard INI parsers so we made our own
        $index = $this->parseVipmIni($indexFile);
        //$this->out->writeln(print_r($index, true));

        //now we can check the release date
        $rel_str = $index['Self']['Release.Date'];
        //$this->out->writeln('Release date: ' . $rel_str);
        $releaseDate = $this->parseTimestamp($rel_str)->shiftTimezone('UTC');
        $this->out->writeln('Index release date: ' . $releaseDate->toISOString());

        //skip out this repo if we're still up to date based on the release date
        if (!$updateIsNull && $releaseDate < $lastUpdate) {
            $this->out->writeln('Repo is up to date.');
            return;
        }

        //now iterate over each of the sections which are each
        //a package/version except for the self section
        foreach ($index as $name => $section) {
            if ($name == 'Self') {
                continue;
            }
            
            //might take a while so keep petting the execution timeout
            set_time_limit(5);

            //Each section heading is a combination of the package name
            // and version so we need to separate the section name.
            // The old indexer incorrectly split on the last instance
            // of a '-'.
            $packageStr = trim(substr($name, 8));
            $p = strpos($packageStr, '-');
            $packageName = substr($packageStr, 0, $p);
            $packageVer = substr($packageStr, $p + 1);
            //$this->out->writeln("\nPackage Name: " . $packageName);
            //$this->out->writeln("Package Version: " . $packageVer);

            //$this->out->writeln(print_r($section, true));

            //Try and retrieve an existing package entry matching the name from the DB
            $pkg = $this->ps->lookupBy(['name' => $packageName], true);

            if (empty($pkg)) {
                //new package, need to create a new one!
                $pkg = new Package();
                $pkg->setName($packageName);

                if (isset($section['Package.Display Name'])) {
                    $pkg->setDisplayName($section['Package.Display Name']);
                } else {
                    $pkg->setDisplayName($this->prettifyName($packageName));
                }

                $pkg->setRepo($repo);

                //$iconUrl = $baseUrl . $section['Icon.URL'];
            } else {
                //Package already existed, we can check versions on the existing entry
                $pkg = $pkg[0];
            }

            //Now that we have the main package info we can check the version
            //Each version section will have its own release date, though we likely
            //only care about latest versions.
            
            $pkgVersion = $pkg->getSpecificVersion($packageVer);

            if (is_null($pkgVersion)) {
                //version not found yet, need to create a new one
                $pkgVersion = new PackageVersion();
                
                //$pkgVersion->setPackage($pkg);
                $pkg->addVersion($pkgVersion);

                $pkgVersion->setVersion($packageVer);
                $pkgVersion->setRepoType('vipm');

                //Release Date isn't set for all packages, so we'll just pick a date to use
                $versRelease = null;
                if (isset($section['Package.Release Date'])) {
                    $dt = $section['Package.Release Date'];
                    //$this->out->writeln('RelDate: "' . $dt . '"');
                    $versRelease = $this->parseTimestamp($dt)->shiftTimezone('UTC');
                } else {
                    $versRelease = $this->parseTimestamp('Wed, 1 Oct 1986 12:00:00 +0000')->shiftTimezone('UTC');
                }
                $pkgVersion->setReleaseDate($versRelease);

                //Separate dependencies into an array
                //Some packages don't list dependencies
                if (isset($section['Dependencies.Requires'])) {
                    $deps = explode(',', $section['Dependencies.Requires']);
                    $pkgVersion->setDepsString($deps);
                }

                $pkgVersion->setIconUrl($baseUrl . $section['Icon.URL']);
                $pkgVersion->setPackageUrl($baseUrl . $section['Package.URL']);

                //The spec file has the extended info for the package version
                $specUrl = $baseUrl . $section['Spec.URL'];

                $this->out->writeln($specUrl);

                $specFile = $indexPath . '/spec/' . $packageStr . '.spec';

                if (file_put_contents($specFile, file_get_contents($specUrl))) {
                    $spec = $this->parseVipmIni($specFile);
                    $desc = $spec['Description'];
                    //$this->out->writeln(print_r($spec, true));

                    if (isset($desc['License'])) {
                        $pkgVersion->setLicense($this->cleanText($desc['License']));
                    }

                    if (isset($desc['Description'])) {
                        $pkgVersion->setDescription($this->cleanText($desc['Description']));
                    }

                    if (isset($desc['Release Notes'])) {
                        $pkgVersion->setReleaseNotes($this->cleanText($desc['Release Notes']));
                    }

                    if (isset($desc['Summary'])) {
                        $pkgVersion->setSummary($this->cleanText($desc['Summary']));
                    } else {
                        $pkgVersion->setSummary(substr($pkgVersion->getDescription(), 0, 100));
                    }

                    $this->em->persist($pkgVersion);
                } else {
                    $this->out->writeln('!!Unable to download spec file for ' . $packageStr);
                }
            }

            //sleep(5);
            //$this->out->writeln(print_r($pkg, true));

            //Get latest version and update package with its developer (vendor)
            $spec = $this->parseVipmIni($indexPath . '/spec/' . $this->latestSpecFromPkg($pkg));

            $dev = $this->devRepo->findOneBy(['name' => $spec['Description']['Vendor']]);

            if (is_null($dev)) {
                //developer not found, create a new one
                $dev = new DeveloperGroup();
                $dev->setName($this->cleanText($spec['Description']['Vendor']));
                $this->em->persist($dev);
            }

            //add* methods check for duplicate contents so we don't need to here
            $pkg->addDeveloper($dev);

            $this->em->persist($pkg);
            $this->em->flush();
        }

        $repo->setLastUpdate($lastMod->shiftTimezone('UTC'));
        $this->em->persist($repo);
        $this->em->flush();
    }

    private function cleanText($t) {
        $t = utf8_decode($t);
        $t = str_replace('\0D', '', $t);
        $t = str_replace('\0A', '<br>', $t);

        return $t;
    }

    private function parseTimestamp($dt_str) : ?Carbon {
        $dt_str = trim($dt_str);

        //Replace 'GMT' with zero offset from GMT for uniformity
        $dt_str = str_replace('GMT', '+0000', $dt_str);

        //datetime parsing expects positive offsets to have a +
        //but the data omits the plus so let's add it in if no sign
        //is listed for the offset
        $lastSpace = strrpos($dt_str, ' ');
        $s = substr($dt_str, $lastSpace + 1, 1);
        if ($s != '-' && $s != '+') {
            $dt_str = substr($dt_str, 0, $lastSpace) . ' +' . substr($dt_str, $lastSpace + 1);
            //$this->out->writeln('Fixed TS: ' . $dt_str);
        }

        $dt = null;

        try {
            $dt = Carbon::createFromFormat(Carbon::RSS, $dt_str);
        } catch (\Exception $err) {
            $dt = Carbon::createFromFormat(Carbon::RSS, 'Wed, 1 Oct 1986 12:00:00 +0000');
        }

        return $dt;
    }

    private function latestSpecFromPkg($pkg) {
        return $pkg->getName() . '-' . $pkg->getLatestVersion()->getVersion() . '.spec';
    }

    private function sortedPackageVersions($pkg) {
        $versions = $pkg->getVersions();
        $dt_vers = [];

        foreach ($versions as $version) {
            $dt_vers[$version->getReleaseDate()->valueOf()] = $version;
        }

        krsort($dt_vers, SORT_NUMERIC);

        return array_values($dt_vers);
    }

    private function prettifyName($name) {
        return ucwords(str_replace('_', ' ', trim($name)));
    }

    private function parseVipmIni($filename) {
        $ini = [];
        $file = file($filename);

        $curSection = "";

        foreach($file as $line) {
            $line = trim($line);
            //$this->out->writeln('--' . $line);
            if (str_starts_with($line, '[')) {
                $curSection = substr($line, 1, strlen($line) - 2);
                //$this->out->writeln('Section ' . $curSection);
                $ini[$curSection] = [];
            } else {
                $p = strpos($line, '=');
                $key = trim(substr($line, 0, $p));
                $val = trim(substr($line, $p + 1));

                if (substr($val, 0, 1) == '"') {
                    //Enclosed string, strip quotes
                    $val = trim($val, '"');
                }
                $ini[$curSection][$key] = $val;
            }
        }

        return $ini;
    }

    private function repoFolderName($repo) {
        return str_replace(' ', '-', $repo->getName());
    }

    private function packagesRootPath() {
        $path = __DIR__;
        //$this->out->writeln("\nScript path: " . $path);
        $path = dirname($path);
        $path = dirname($path);
        //$this->out->writeln("Project root: " . $path);
        $path = $path . '/var/packages';

        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }

        $path = realpath($path);
        //$this->out->writeln("Packages root: " . $path);

        return $path;
    }

    private function parseLastModified($headers) : ?Carbon {
        foreach($headers as $header) {
            $p = strpos($header, ':');
            //$s = explode(':', $header);
            $name = trim(substr($header, 0, $p));
            //$this->out->writeln($name);

            if ($name == "Last-Modified") {
                $dt_str = trim(substr($header, $p + 1));
                $this->out->writeln("\nLast modified: " . $dt_str);
                $date = Carbon::createFromFormat(Carbon::RFC7231_FORMAT, $dt_str, 'GMT');

                return $date;
            }
        }

        return null;
    }
}