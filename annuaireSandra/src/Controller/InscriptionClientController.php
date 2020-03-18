<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\InscriptionClient;
use App\Form\InscriptionClientType;

class InscriptionClientController extends AbstractController
{
    /**
     * @Route("/inscription_client", name="inscription_client")
     */
    public function index(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $InscriptionClient = new InscriptionClient();
        $form = $this->createForm(InscriptionClientType::class,$InscriptionClient);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()){
            $em->persist($InscriptionClient);
            $em->flush();
        }

        return $this->render('inscription_client/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
