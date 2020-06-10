<?php

namespace App\Controller\back;

use App\Entity\User;
use App\Form\UserType;
use App\Form\UserProType;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


/**
 * @Route("/administration")
 */
class UserController extends AbstractController
{
	/**
	 * @Route("/", name="users", methods={"GET"})
	 */
	public function index(UserRepository $userRepository): Response
	{
		return $this->render('admin/index.html.twig', [
			'user' => $userRepository->findAll(),
		]);
	}

	/**
	 * @Route("/new", name="new", methods={"GET","POST"})
	 * @Route("/{id}/edit", name="edit", methods={"GET","POST"})
	 */
	public function form(Request $request, UserPasswordEncoderInterface $encoder, User $user = null, ObjectManager $manager): Response
	{
		if (!$user) {
			$user = new User();
			$form = $this->createForm(UserType::class, $user);
		} else {
			$form = $this->createFormBuilder($user)
				->add('email', EmailType::class)
				->add('nom', TextType::class)
				->add('prenom', TextType::class)
				->add('pro', UserProType::class)
				->add('adresse', null, ['required' => false])
				->add('codepostal', null, ['required' => false])
				->add('ville', null, ['required' => false])
				->add('tel', null, ['required' => false])
				->add(
					'roles',
					ChoiceType::class,
					array(
						'multiple' => true,
						'choices' => [
							'pro' => 'ROLE_PRO',
							'admin' => 'ROLE_ADMIN',
							'user' => 'ROLE_USER',
						],
						'label' => 'Rôle'
					)
				)
				->getForm();
		}

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			if (!$user->getId()) {
				$hash = $encoder->encodePassword($user, $user->getPassword());
				$user->setPassword($hash);
			}

			$manager->persist($user);
			$manager->flush();

			return $this->redirectToRoute('users');
		}

		return $this->render('admin/form.html.twig', [
			'user' => $user,
			'form' => $form->createView(),
		]);
	}

	/**
	 * See one user
	 *
	 * @Route("/{id}/read", name="read")
	 */
	public function read(User $user)
	{
		return $this->render(
			'admin/show.html.twig',
			['user' => $user]
		);
	}

	/**
	 * @Route("/{id}/delete", name="delete")
	 */
	public function delete(Request $request, UserRepository $userRepo, ObjectManager $manager, $id)
	{
		$user = $userRepo->findOneBy(['id' => $id]);
		$form = $this->createFormBuilder($user)
			->add('Supprimer', SubmitType::class, ['attr' => ['class' => 'btn btn-danger']])
			->getForm();

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$manager->remove($user);
			$manager->flush();

			return $this->redirectToRoute('users');
		}

		return $this->render(
			'admin/delete.html.twig',
			[
				'user' => $user,
				'formDelete' => $form->createView()
			]
		);
	}
}
