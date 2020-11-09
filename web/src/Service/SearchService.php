<?php

namespace App\Service;

use App\Entity\Package;
use App\Repository\PackageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Security;

/**
 * SearchService serves to perform package operations such as creation, lookup, etc.
 */
class SearchService {

    private $em;
    private $security;
    private $packageRepo;
    private $ps;

    /**
     * Initializes this instance when needed by a request.
     *
     * @param EntityManagerInterface $em Provides access to database backed entities.
     * @param Security $security Provides access to currently logged in user, if any, to check permissions.
     */
    public function __construct(EntityManagerInterface $em, Security $security, PackageRepository $repo, PackageService $ps) {
        $this->security = $security;
        $this->em = $em;
        $this->packageRepo = $repo;
        $this->ps = $ps;
    }

    public function searchPackages($params) {
        $packages = [];

        if (empty($params) || empty($params['terms'])) {
            $packages = $this->packageRepo->findAll();
        } else {
            $terms = array_map('strtolower', $params['terms']);

            $pkgs = [];

            foreach ($terms as $term) {
                $qb = $this->em->createQueryBuilder();

                $qb ->select(['p', 'v', 'g', 't', 'r'])
                    ->from(Package::class, 'p')
                    ->leftJoin('p.versions', 'v')
                    ->leftJoin('p.developers', 'g')
                    ->leftJoin('p.tags', 't')
                    ->leftJoin('p.repo', 'r')
                    ->where('p.name LIKE :term')
                    ->orWhere('p.description LIKE :term')
                    ->setParameter('term', '%' . $term . '%');
                
                $query = $qb->getQuery();
                $p = $query->getResult();

                foreach ($p as $package) {
                    $name = $package->getName();
                    $description = $package->getDescription();

                    $score = 1;

                    $words = array_map('strtolower', str_word_count($name . ' ' . $description, 1));
                    if (in_array($term, $words)) {
                        $score = 3;
                    }

                    if (!array_key_exists($name, $pkgs)) {
                        $pkgs[$name] = [
                            'score' => $score,
                            'package' => $package
                        ];
                    } else {
                        $pkgs[$name]['score'] += $score;
                    }
                }
            }

            $scores = [];
            foreach ($pkgs as $n => $p) {
                $scores[$n] = $p['score'];
            }
            arsort($scores);

            foreach($scores as $n => $c) {
                $packages[] = $pkgs[$n]['package'];
            }
        }

        return [
            'packages' => $packages,
            'scores' => $scores
        ];
    }
}