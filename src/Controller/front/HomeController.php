<?php

namespace App\Controller\front;

use App\Entity\Research;
use App\Form\PropertySearchType;
use App\Repository\CompanyRepository;
use App\Repository\MetiersRepository;
use App\Repository\ResearchRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
	public function setResearches($researchRepo, $otherRepo, $manager, $method, $fieldSetter, $fieldGetter)
	{

		for ($i = 0; $i < count($otherRepo->findAll()); $i++) {

			$research = new Research();

			$isUnique = true;

			for ($j = 0; $j < count($researchRepo->findAll()); $j++) {
				if ($otherRepo->findAll()[$i]->$method() == $researchRepo->findAll()[$j]->$fieldGetter()) {
					$isUnique = false;
				}
			}

			if ($isUnique) {
				$research->$fieldSetter($otherRepo->findAll()[$i]->$method());

				$manager->persist($research);
				$manager->flush();
			}
		}
	}

	public function updateResearch($manager, $companyRepo, $metierRepo, $researchRepo)
	{

		$this->setResearches($researchRepo, $companyRepo, $manager, 'getVille', 'setCities', 'getCities');
		$this->setResearches($researchRepo, $metierRepo, $manager, 'getCategorie', 'setCategories', 'getCategories');
		$this->setResearches($researchRepo, $metierRepo, $manager, 'getMetier', 'setProfessionnals', 'getProfessionnals');
	}

	/**
	 * @Route("/", name="home")
	 */
	public function index(ObjectManager $manager, CompanyRepository $companyRepo, MetiersRepository $metierRepo, ResearchRepository $researchRepo, Request $request)
	{
		$this->updateResearch($manager, $companyRepo, $metierRepo, $researchRepo);

		$research = new Research();

		$form = $this->createForm(PropertySearchType::class, $research);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {

			//les données sont bien récupérées, maintenant il faut filtrer de sorte à ce que les données réçues soient bien en adéquation avec la sélection

			dump($research->getCategories());
			die();

			return $this->redirectToRoute('rechercher_index', [
				'search' => $research
			]);
		}
		return $this->render('front/home/index.html.twig', [
			'search_form' => $form->createView()
		]);
	}
}
