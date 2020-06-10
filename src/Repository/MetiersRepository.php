<?php

namespace App\Repository;

use App\Entity\Metiers;
use Doctrine\ORM\Query;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Metiers|null find($id, $lockMode = null, $lockVersion = null)
 * @method Metiers|null findOneBy(array $criteria, array $orderBy = null)
 * @method Metiers[]    findAll()
 * @method Metiers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MetiersRepository extends ServiceEntityRepository
{
	public function __construct(ManagerRegistry $registry)
	{
		parent::__construct($registry, Metiers::class);
	}

	public function findAllVisibleQuery(Metiers $search): Query
	{

		$query = $this->findAllVisibleQuery();
		if ($search->getVille()) {
			$query = $query

				->andwhere('ville' != 'ville')
				->setParameter('ville', $search->getVille());
		}

		if ($search->getMetier()) {
			$query = $query

				->andwhere('metier' != 'metier')
				->setParameter('metier', $search->getMetier());
		}
	}
}
