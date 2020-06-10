<?php

namespace App\Controller\front;

use App\Entity\PropertySearch;
use App\Form\PropertySearchType;
use App\Repository\UserRepository;
use App\Repository\CompanyRepository;
use App\Repository\MetiersRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RechercheController extends AbstractController
{

	public function __construct(Security $security)
	{
		$this->security = $security;
	}

	/**
	 * @Route("/rechercher", name="rechercher_index")
	 */
	public function rechercher(CompanyRepository $CompanyRepository): Response
	{
		$ville = "Carcassonne";

		return $this->render(
			'front/recherche/index.html.twig',
			[
				'companies' => $CompanyRepository->findBy(['ville' => $ville]),
				//'form' => $form->createView(),
			]
		);
	}

//Filtrage par catégories présentent sur le home

	/**
	 * @Route("/rechercher/batiment", name="rechercher_batiment", methods={"GET"})
	 */
	public function requestBatiment(CompanyRepository $CompanyRepository, MetiersRepository $metiersRepository): Response
	{
		$batiment = $metiersRepository->findBy(['categorie' => 'bâtiment']);

		return $this->render('front/recherche/index.html.twig', [
			'companies' => $CompanyRepository->findByActivity([$batiment]),

		]);
	}

	/**
	 * @Route("/rechercher/beaute", name="rechercher_beaute", methods={"GET"})
	 */
	public function requestbeaute(CompanyRepository $CompanyRepository, MetiersRepository $metiersRepository): Response
	{
		$beaute = $metiersRepository->findBy(['categorie' => 'beauté']);

		return $this->render('front/recherche/index.html.twig', [
			'companies' => $CompanyRepository->findByActivity([$beaute]),
		]);
	}
	/**
	 * @Route("/rechercher/sante", name="rechercher_sante", methods={"GET"})
	 */
	public function requestsante(CompanyRepository $CompanyRepository, MetiersRepository $metiersRepository): Response
	{
		$sante = $metiersRepository->findBy(['categorie' => 'Santé']);

		return $this->render('front/recherche/index.html.twig', [
			'companies' => $CompanyRepository->findByActivity([$sante]),

		]);
	}
	/**
	 * @Route("/rechercher/hotellerie", name="rechercher_hotellerie", methods={"GET"})
	 */
	public function requesthotellerie(CompanyRepository $CompanyRepository, MetiersRepository $metiersRepository): Response
	{
		$hotellerie = $metiersRepository->findBy(['categorie' => 'Hotellerie']);

		return $this->render('front/recherche/index.html.twig', [
			'companies' => $CompanyRepository->findByActivity([$hotellerie]),

		]);
	}

	/**
	 * @Route("/rechercher/restauration", name="rechercher_restauration", methods={"GET"})
	 */
	public function requestrestauration(CompanyRepository $CompanyRepository, MetiersRepository $metiersRepository): Response
	{
		$restauration = $metiersRepository->findBy(['categorie' => 'Restauration']);

		return $this->render('front/recherche/index.html.twig', [
			'companies' => $CompanyRepository->findByActivity([$restauration]),

		]);
	}

	/**
	 * @Route("/rechercher/jardin", name="rechercher_jardin", methods={"GET"})
	 */
	public function requestjardin(CompanyRepository $CompanyRepository, MetiersRepository $metiersRepository): Response
	{
		$jardin = $metiersRepository->findBy(['categorie' => 'Jardin']);

		return $this->render('front/recherche/index.html.twig', [
			'companies' => $CompanyRepository->findByActivity([$jardin]),

		]);
	}

	/**
	 * @Route("/rechercher/sport", name="rechercher_sport", methods={"GET"})
	 */
	public function requestsport(CompanyRepository $CompanyRepository, MetiersRepository $metiersRepository): Response
	{
		$sport = $metiersRepository->findBy(['categorie' => 'Sport']);

		return $this->render('front/recherche/index.html.twig', [
			'companies' => $CompanyRepository->findByActivity([$sport]),

		]);
	}

	/**
	 * @Route("/rechercher/transport", name="rechercher_transport", methods={"GET"})
	 */
	public function requesttransport(CompanyRepository $CompanyRepository, MetiersRepository $metiersRepository): Response
	{
		$transport = $metiersRepository->findBy(['categorie' => 'transport']);

		return $this->render('front/recherche/index.html.twig', [
			'companies' => $CompanyRepository->findByActivity([$transport]),

		]);
	}

	/**
	 * @Route("/rechercher/servicepro", name="rechercher_servicepro", methods={"GET"})
	 */
	public function requestservicepro(CompanyRepository $CompanyRepository, MetiersRepository $metiersRepository): Response
	{
		$servicepro = $metiersRepository->findBy(['categorie' => 'Service aux professionnels']);

		return $this->render('front/recherche/index.html.twig', [
			'companies' => $CompanyRepository->findByActivity([$servicepro]),

		]);
	}

	/**
	 * @Route("/rechercher/serviceperso", name="rechercher_serviceperso", methods={"GET"})
	 */
	public function requestserviceperso(CompanyRepository $CompanyRepository, MetiersRepository $metiersRepository): Response
	{
		$serviceperso = $metiersRepository->findBy(['categorie' => 'Service aux particulers']);

		return $this->render('front/recherche/index.html.twig', [
			'companies' => $CompanyRepository->findByActivity([$serviceperso]),

		]);
	}

	/**
	 * @Route("/rechercher/association", name="rechercher_association", methods={"GET"})
	 */
	public function requestassociation(CompanyRepository $CompanyRepository, MetiersRepository $metiersRepository): Response
	{
		$association = $metiersRepository->findBy(['categorie' => 'Association']);

		return $this->render('front/recherche/index.html.twig', [
			'companies' => $CompanyRepository->findByActivity([$association]),

		]);
	}

	/**
	 * @Route("/rechercher/divers", name="rechercher_divers", methods={"GET"})
	 */
	public function requestdivers(CompanyRepository $CompanyRepository, MetiersRepository $metiersRepository): Response
	{
		$divers = $metiersRepository->findBy(['categorie' => 'Divers']);

		return $this->render('front/recherche/index.html.twig', [
			'companies' => $CompanyRepository->findByActivity([$divers]),

		]);
	}
}
