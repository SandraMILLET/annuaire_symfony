<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\InscriptionType;


use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class SecurityController extends AbstractController
{
    /**
     *  @Route("/inscription", name="security_registration")
     */
   public function registration(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder) {
       $user = new User();

       $form = $this->createForm(InscriptionType::class, $user);

       $form->handleRequest($request);

       if($form->isSubmitted() && $form->isValid()) {
           $hash = $encoder->encodePassword($user, $user->getMdp());
           
           $user->setMdp($hash);

           $manager->persist($user);
           $manager->flush();
       }

       return $this->render('security/registration.html.twig', [
           'form' => $form->createView()
       ]);

   }
}