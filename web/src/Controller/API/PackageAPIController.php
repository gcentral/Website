<?php

namespace App\Controller\API;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

use Carbon\Carbon;

use App\Entity\Package;
use App\Entity\PackageVersion;
use App\Entity\PackageTag;
use App\Entity\PackageRepo;
use App\Entity\DeveloperGroup;
use App\Repository\PackageRepository;
use App\Service\PackageService;
use App\Service\SearchService;

class PackageAPIController extends AbstractController
{
    /**
     * @Route("/api/packages/list", name="api_packages")
     */
    public function index(EntityManagerInterface $em) {
        //since we'll be serializing everything 
        $qb = $em->createQueryBuilder();

        $qb ->select(['p', 'v', 'g', 't', 'r'])
            ->from(Package::class, 'p')
            ->leftJoin('p.versions', 'v')
            ->leftJoin('p.developers', 'g')
            ->leftJoin('p.tags', 't')
            ->leftJoin('p.repo', 'r');
        
        $query = $qb->getQuery();
        $packages = $query->getArrayResult();
        
        $response = new JsonResponse(['packages' => $packages]);

        return $response;
    }

    /**
     * @Route("/api/package/{id}", name="api_package_detail")
     */
    public function package_detail(Package $package) {
        return new JsonResponse($package);
    }

    /**
     * @Route("/api/packages/search", name="api_package_search")
     */
    public function package_search(Request $request, SearchService $search) {
        $params = json_decode($request->getContent(), true);

        $results = $search->searchPackages($params);

        return new JsonResponse($results);
    }

    /**
     * @Route("/api/packages/ingest", name="api_package_ingest")
     */
    public function package_ingest(Request $request, PackageService $ps) {
        /**
         * This will currently look for a gc-packages.json file in the project root
         * and update the database if it finds any new entries. Currently this file
         * must manually be updated and then an authenticated user can request this
         * endpoint to trigger the update. 
         */

        $em = $this->getDoctrine()->getManager();

        $response = new Response();
        $response->setStatusCode(Response::HTTP_OK);
        $response->headers->set('Content-Type', 'text/html');

        $packages = json_decode($request->getContent(), true)["Packages"];

        $c = '';

        //$response->setContent(print_r($packages, true));
        //return $response;

        //create repositories
        $gpm = new PackageRepo();
        $em->persist($gpm);
        $gpm->setName("GPM Repository");
        $gpm->setRepoType("gpm");
        $gpm->setEnabled(true);
        $c = $c . "GPM Repo instantiated\n";

        $vipm = new PackageRepo();
        $em->persist($vipm);
        $vipm->setName("VIPM Community");
        $vipm->setRepoType("vipm");
        $vipm->setEnabled(true);
        $c = $c . "VIPM Repo instantiated\n";

        $vendors = [];

        foreach($packages as $package) {
            //might take a while so keep petting the execution timeout
            set_time_limit(5);

            //Make sure versions are sorted by release date
            $versions = $package['Versions'];
            $rel = [];
            $s_vers = [];

            foreach($versions as $i => $version) {
                $rel[$i] = $version['ReleaseDate'];
            }

            asort($rel);

            foreach($rel as $i => $r) {
                $s_vers[] = $versions[$i];
            }
            // Versions are now sorted, first one oldest in $s_vers

            $p = new Package();
            $em->persist($p);
            $p->setName($package['Name']);
            $p->setDisplayName($package['DisplayName']);
            $c = $c . "\tCreating package " . $p->getName() . "\n";

            $latest = null;

            foreach ($s_vers as $version) {
                $v = new PackageVersion();
                $em->persist($v);
                $v->setPackage($p);
                $v->setReleaseDate(Carbon::parse($version['ReleaseDate']));
                $v->setReleaseNotes($version['Release Notes']);
                $v->setVersion($version['Version']);
                $v->setPackageUrl($version['PackageURL']);
                $v->setRepoType($version['RepoType']);
                $v->setDepsString($version['Dependencies']);
                $c = $c . "\t\tversion: " . $v->getVersion() . "\n";

                $latest = $version;
            }

            if (!is_null($latest)) {
                $p->setDescription($latest['Description']);
                $p->setIconUrl($latest['IconURL']);

                switch($latest['RepoType']) {
                    case "GPM":
                        $p->setRepo($gpm);
                    break;

                    case "VIPM":
                        $p->setRepo($vipm);
                    break;
                }

                $g = null;

                if (array_key_exists($latest['Vendor'], $vendors)) {
                    $g = $vendors[$latest['Vendor']];
                } else {
                    $g = new DeveloperGroup();
                    $em->persist($g);
                    $g->setName($latest['Vendor']);
                    $g->setDisplayName($latest['Author']);
                    $vendors[$g->getName()] = $g;
                    $c = $c . "Creating group " . $g->getDisplayName() . "\n";
                }
                
                $g->addPackage($p);
                $c = $c . "\tAdding to " . $g->getDisplayName() . "\n";
            }
        }

        $em->flush();

        $response->setContent($c);

        return $response;
    }
}
