<?php

namespace App\Repository;

use App\Entity\ProductActor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProductActor|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductActor|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductActor[]    findAll()
 * @method ProductActor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductActorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductActor::class);
    }

    // /**
    //  * @return ProductActor[] Returns an array of ProductActor objects
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
    public function findOneBySomeField($value): ?ProductActor
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
