<?php

namespace App\Repository;

use App\Entity\ProductVisit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProductVisit|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductVisit|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductVisit[]    findAll()
 * @method ProductVisit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductVisitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductVisit::class);
    }

    // /**
    //  * @return ProductVisit[] Returns an array of ProductVisit objects
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
    public function findOneBySomeField($value): ?ProductVisit
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
