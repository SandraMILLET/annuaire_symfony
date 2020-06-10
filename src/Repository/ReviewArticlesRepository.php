<?php

namespace App\Repository;

use App\Entity\ReviewArticles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ReviewArticles|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReviewArticles|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReviewArticles[]    findAll()
 * @method ReviewArticles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReviewArticlesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReviewArticles::class);
    }

    // /**
    //  * @return ReviewArticles[] Returns an array of ReviewArticles objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ReviewArticles
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
