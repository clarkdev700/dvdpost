<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    // /**
    //  * @return Product[] Returns an array of Product objects
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
    public function findOneBySomeField($value): ?Product
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /**
      * @return Product[] Returns an array of Product objects
      */
    
    public function findTheBestConsume($value)
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.product_id', 'DESC')
            ->andWhere('p.category = :val')
            ->setParameter('val', $value)
            ->setMaxResults(5)
            ->getQuery()
            ->getResult()
        ;
    }


    /**
      * @return Product[] Returns an array of Product objects
     */
    
    public function findNewProduct($value)
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.product_id', 'DESC')
            //->andWhere('p.exampleField = :val')
            //->setParameter('val', $value)
            ->setMaxResults($value)
            ->getQuery()
            ->getResult()
        ;
    }

    function findProduct($motcle, $genre = null, $datedebut = null, $datefin = null) {
        $conn = $this->getEntityManager()->getConnection();
        
        $parameters['motcle'] = $motcle;
        
        $q = "SELECT * FROM product WHERE title LIKE ':motcle%' or title LIKE '%:motcle%'";
        $q1 = "SELECT * FROM product WHERE description LIKE '%:motcle%'";
        $q2 = "SELECT * FROM product WHERE producer_id in (SELECT producer_id FROM producer WHERE name_producer LIKE '%:motcle%')";
        $q3 = "SELECT * FROM product WHERE product_id in (SELECT product_id FROM product_actor pa, actor a WHERE a.actor_id = pa.actor_id AND a.name_actor LIKE '%:motcle%')";
        
        if (!empty($genre)) {
            $q .= " AND category_id = ':categorie'";
            $q1 .= " AND category_id = ':categorie'";
            $q2 .= " AND category_id = ':categorie'";
            $q3 .= " AND category_id = ':categorie'";
            //set category parameter value
            $parameters[] = $categorie;
        }

        if (!empty($datedebut)) {
            $q .= " AND publication_date BETWEEN  :datedebut AND :datefin";
            $q1 .= " AND publication_date BETWEEN :datedebut AND :datefin";
            $q2 .= " AND publication_date BETWEEN :datedebut AND :datefin";
            $q3 .= " AND publication_date BETWEEN :datedebut AND :datefin";
            //set date debut and datefin parameters value
            $parameters['datedebut'] = $datedebut;
            $parameters['datefin'] = $datefin;
        }


        $sql = "$q UNION $q1 UNION $q2 UNION $q3";
            
        $stmt = $conn->prepare($sql);
        $stmt->execute($parameters);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAllAssociative();        
    }

}
