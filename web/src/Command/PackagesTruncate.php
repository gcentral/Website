<?php

namespace App\Command;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\ORM\EntityManagerInterface;

use App\Repository\PackageRepoRepository;

class PackagesIndex extends Command
{

    private $em; //EntityManagerInterface

    private $repoRepo; //PackageRepoRepository

    public function __construct(EntityManagerInterface $em, PackageRepoRepository $repoRepo) {
        parent::__construct();
        $this->em = $em;
        $this->repoRepo = $repoRepo;
    }

    protected function configure()
    {
        $this
            ->setName('packages:truncate')
            ->setDescription('WARNING WILL REMOVE ALL PACKAGE AND DEVELOPER DATA')
        ;
    }

    protected function execute(InputInterface $in, OutputInterface $out)
    {
        $this->out = $out;
        $conn = $this->em->getConnection();

        $tables = [
            'package',
            'package_version',
            'developer_group',
            'developer_group_user',
            'developer_group_package'
        ];

        $dbPlatform = $conn->getDatabasePlatform();
        $conn->query('SET FOREIGN_KEY_CHECKS=0');

        for ($i = 0; $i < count($tables); ++$i) {
            $q = $dbPlatform->getTruncateTableSQL($tables[$i]);
            $out->write('Truncating ' . $tables[$i] . '...');
            $conn->executeUpdate($q);
            $out->writeln('Done.');
        }

        $conn->query('SET FOREIGN_KEY_CHECKS=1');

        $repos = $this->repoRepo->findAll();

        $out->write('Resetting repo last update...');

        for ($i = 0; $i < count($repos); ++$i) {
            $repo = $repos[$i];
            $repo->setLastUpdate(null);
            $this->em->persist($repo);
        }

        $this->em->flush();

        $out->writeln('Done.');

        return Command::SUCCESS;
    }
}