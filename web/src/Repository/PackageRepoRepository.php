<?php

namespace App\Repository;

use App\Entity\PackageRepo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PackageRepo|null find($id, $lockMode = null, $lockVersion = null)
 * @method PackageRepo|null findOneBy(array $criteria, array $orderBy = null)
 * @method PackageRepo[]    findAll()
 * @method PackageRepo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PackageRepoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PackageRepo::class);
    }

    // /**
    //  * @return PackageRepo[] Returns an array of PackageRepo objects
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
    public function findOneBySomeField($value): ?PackageRepo
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
