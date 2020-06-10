<?php

namespace App\Controller\back;

use App\Entity\Articles;
use App\Repository\ArticlesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Validator\Validator\ValidatorInterface;

class AuthorPannelController extends AbstractController
{
	public function __construct(Security $security)
	{
		$this->security = $security;
	}

	/**
	 * @Route("/authorPannel", name="authorPannel_index")
	 */
	public function index(ArticlesRepository $articlesRepository)
	{
		$articles = $articlesRepository->findAll();

		return $this->render(
			'back/author_pannel/index.html.twig',
			[
				'articles' => $articles
			]
		);
	}

	/**
	 * Permet de créer un article
	 * 
	 * @Route("/authorPannel/create", name="authorPannel_create")
	 * @Route("/authorPannel/{id}/update", name="authorPannel_update")
	 *
	 * @return Response
	 */
	public function form(Articles $article = null, Request $request, ObjectManager $manager, ValidatorInterface $validator)
	{
		if (!$article) {
			$article = new Articles();
			$user = $this->security->getUser();
		}

		$form = $this->createFormBuilder($article)
			->add('title')
			->add('description')
			->add('content')
			->add('image')
			->add('status', CheckboxType::class, ['required' => false])
			->getForm();

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			if (!$article->getId()) {

				$article->setPublishDate(new \DateTime())
					->setAuthor($user);
			}

			$errors = $validator->validate($article);

			if (count($errors) > 0) {
				$errorString = (string) $errors;
				return new Response($errorString);
			} else {
				$manager->persist($article);
				$manager->flush();
			}

			if ($article->getStatus() == true) {
				return $this->redirectToRoute('actus_show', ['id' => $article->getId()]);
			} else {
				return $this->redirectToRoute('authorPannel_index');
			}
		}

		return $this->render(
			'back/author_pannel/form.html.twig',
			[
				'formArticle' => $form->createView(),
				'articleId' => $article->getId()
			]
		);
	}

	/**
	 * 
	 * @Route("/authorPannel/{id}/delete", name="authorPannel_delete")
	 * @return Response
	 */
	public function delete(Request $request, ObjectManager $manager, ArticlesRepository $articleRepo, $id)
	{
		$article = $articleRepo->findOneBy(['id' => $id]);

		$form = $this->createFormBuilder($article)
			->add('Supprimer', SubmitType::class, ['attr' => ['class' => "btn-danger btn-lg"]])
			->getForm();

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$manager->remove($manager->getRepository(Articles::class)->find($id));
			$manager->flush();

			return $this->redirectToRoute('authorPannel_index');
		}

		return $this->render(
			'back/author_pannel/delete.html.twig',
			[
				'article' => $article,
				'formDelete' => $form->createView()
			]
		);
	}
}
