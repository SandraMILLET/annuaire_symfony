<?php

namespace App\Controller\front;

use App\Entity\Articles;
use App\Repository\ArticlesRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ActuController extends AbstractController
{

	/**
	 * @Route("/actus", name="actus_index")
	 */
	public function actus(ArticlesRepository $repository)
	{
		$articles = $repository->findBy(['status' => 1]);

		return $this->render(
			'front/actu/index.html.twig',
			[
				'articles' => $articles
			]
		);
	}

	/**
	 * Displays a single post
	 * 
	 * @Route("/actus/{id}", name="actus_show")
	 *
	 * @return Response
	 */
	public function show($id, ArticlesRepository $repository)
	{
		$article = $repository->findOneById($id);

		return $this->render(
			'front/actu/show.html.twig',
			[
				'article' => $article
			]
		);
	}
}
