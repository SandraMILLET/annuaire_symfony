<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\InscriptionUser;
use App\Form\InscriptionUserType;
use Symfony\Component\HttpFoundation\Request;

class InscriptionUserController extends AbstractController
{
    /**
     * @Route("/inscription/user", name="inscription_user")
     */
    public function index(Request $request)
    {
        

        $inscriptionUser = new inscriptionUser();

        $form=$this->createForm(inscriptionUserType::class, $inscriptionUser);

               if ($request->isMethod('POST')){
                   $form->handleRequest($request);}
               if ($form->isSubmitted() && $form->isValid())
               {
                   $inscriptionUser = $form->getData();
                   $em = $this->getDoctrine()->getManager();
                    $em->persist($inscriptionUser);
                    $em->flush();

                   return $this->redirectToRoute('inscription_user');
               }
        return $this->render('inscription_user/index.html.twig', [
            'form'=> $form-> createView()
        ]);
    }
}
