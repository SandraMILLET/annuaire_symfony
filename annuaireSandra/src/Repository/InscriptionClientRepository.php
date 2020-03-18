<?php

namespace App\Repository;

use App\Entity\InscriptionClient;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method InscriptionClient|null find($id, $lockMode = null, $lockVersion = null)
 * @method InscriptionClient|null findOneBy(array $criteria, array $orderBy = null)
 * @method InscriptionClient[]    findAll()
 * @method InscriptionClient[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InscriptionClientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InscriptionClient::class);
    }

    // /**
    //  * @return InscriptionClient[] Returns an array of InscriptionClient objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?InscriptionClient
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
