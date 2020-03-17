<?php

namespace App\Repository;

use App\Entity\InscriptionPro;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method InscriptionPro|null find($id, $lockMode = null, $lockVersion = null)
 * @method InscriptionPro|null findOneBy(array $criteria, array $orderBy = null)
 * @method InscriptionPro[]    findAll()
 * @method InscriptionPro[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InscriptionProRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InscriptionPro::class);
    }

    // /**
    //  * @return InscriptionPro[] Returns an array of InscriptionPro objects
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
    public function findOneBySomeField($value): ?InscriptionPro
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
