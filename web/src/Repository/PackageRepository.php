<?php

namespace App\Repository;

use App\Entity\Package;
use App\Entity\DeveloperGroup;
use App\Entity\User;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @method Package|null find($id, $lockMode = null, $lockVersion = null)
 * @method Package|null findOneBy(array $criteria, array $orderBy = null)
 * @method Package[]    findAll()
 * @method Package[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PackageRepository extends ServiceEntityRepository
{
    private $em;

    public function __construct(ManagerRegistry $registry,
        EntityManagerInterface $em)
    {
        parent::__construct($registry, Package::class);
        $this->em = $em;
    }

    public function topPackagesByColumn($col_name, $limit = 30) {

        $q = $this->em->createQuery("SELECT p, g FROM App\Entity\Package p LEFT JOIN p.developers g ORDER BY p." . $col_name . " DESC");
        $q->setMaxResults($limit);
        
        return $q->getResult();
    }

    // /**
    //  * @return Package[] Returns an array of Package objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Package
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
