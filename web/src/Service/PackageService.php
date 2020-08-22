<?php

namespace App\Service;

use App\Entity\Package;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Security;

/**
 * PackageService serves to perform package operations such as creation, lookup, etc.
 */
class PackageService {

    private $em;
    private $security;

    /**
     * Initializes this instance when needed by a request.
     *
     * @param EntityManagerInterface $em Provides access to database backed entities.
     * @param Security $security Provides access to currently logged in user, if any, to check permissions.
     */
    public function __construct(EntityManagerInterface $em, Security $security) {
        $this->security = $security;
        $this->em = $em;
    }
    
    /**
     * Generates a list of packages by various search criteria.
     *
     * @param [type] $params
     * @return Array Array of packages matching criteria
     */
    public function lookupBy($params) {
        if (empty($params)) {
            return [];
        }

        $qb = $this->em->createQueryBuilder();

        $qb ->select(['p', 'v', 'g', 't', 'r'])
            ->from(Package::class, 'p')
            ->leftJoin('p.versions', 'v')
            ->leftJoin('p.developers', 'g')
            ->leftJoin('p.tags', 't')
            ->leftJoin('p.repo', 'r');
        
        foreach($params as $param => $value) {
            if (!empty($value)) {
                switch ($param) {
                    case 'name':
                        $qb->andWhere($qb->expr()->like('p.name', ':name'))
                            ->setParameter('name', '%' . $value . '%');
                        break;
                    
                    default:
                        $qb->andWhere($qb->expr()->like('p.' . $param, ':' . $param))
                            ->setParameter($param, '%' . $value . '%');
                    break;
                }
            }
        }

        $query = $qb->getQuery();
        return $query->getResult();
    }
}