<?php
/*@author Sandra
* CRUD */
namespace App\Controller\back;

use App\Entity\User;
use App\Form\UserType;
use App\Entity\UserPro;
use App\Form\UserProType;
use App\Form\InscriptionType;
use App\Repository\UserProRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/userpro")
 */
class UserProController extends AbstractController
{
    /**
     * @Route("/", name="user_pro_index", methods={"GET"})
     */
    public function index(UserProRepository $userProRepository): Response
    {
        return $this->render('back/user_pro/index.html.twig', [
            'user_pros' => $userProRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="user_pro_new", methods={"GET","POST"})
     */
    public function new(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder): Response
    {
        $user = new User();

        $form = $this->createForm(InscriptionType::class, $user);

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $hash = $encoder->encodePassword($user, $user->getPassword());

            $user->setPassword($hash);
            
            $user->setRoles("ROLE_PRO");
                        
            $manager->persist($user);
            $manager->flush();
            

            return $this->redirectToRoute('user_pro_index');
        }

        return $this->render('back/user_pro/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_pro_show", methods={"GET"})
     */
    public function show(UserPro $userPro): Response
    {
        return $this->render('back/user_pro/show.html.twig', [
            'user_pro' => $userPro,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="user_pro_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, User $user): Response
    {
        $form = $this->createForm(InscriptionType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_pro_index');
        }

        return $this->render('back/user_pro/edit.html.twig', [
            'user_pro' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_pro_delete", methods={"DELETE"})
     */
    public function delete(Request $request, UserPro $userPro): Response
    {
        if ($this->isCsrfTokenValid('delete'.$userPro->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($userPro);
            $entityManager->flush();
        }

        return $this->redirectToRoute('back/user_pro_index');
    }
}
