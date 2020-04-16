<?php

namespace App\Repository;

use App\Entity\InscriptionUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method InscriptionUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method InscriptionUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method InscriptionUser[]    findAll()
 * @method InscriptionUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InscriptionUserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InscriptionUser::class);
    }

    // /**
    //  * @return InscriptionUser[] Returns an array of InscriptionUser objects
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
    public function findOneBySomeField($value): ?InscriptionUser
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
