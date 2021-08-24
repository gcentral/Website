<?php

namespace App\Service;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Security;

use App\Entity\Package;
use App\Entity\DeveloperGroup;

/**
 * PackageService serves to perform package operations such as creation, lookup, etc.
 */
class DeveloperService {

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
     * @param bool $exact Whether the query will use the % characters (T) to check for string contents instead of full matches (F)
     * @return Array Array of packages matching criteria
     */
    public function lookupBy($params, $exact = false) {
        if (empty($params)) {
            return [];
        }

        $f = $exact ? '' : '%';

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
                            ->setParameter('name', $f . $value . $f);
                        break;
                    
                    default:
                        $qb->andWhere($qb->expr()->like('p.' . $param, ':' . $param))
                            ->setParameter($param, $f . $value . $f);
                    break;
                }
            }
        }

        $query = $qb->getQuery();
        return $query->getResult();
    }
}