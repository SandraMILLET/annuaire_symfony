<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\InscriptionPro;
use App\Form\InscriptionProType;

class InscriptionProController extends AbstractController
{
    /**
     * @Route("/inscription/pro", name="inscription_pro")
     */
    public function index(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $InscriptionPro = new InscriptionPro();
        $form = $this->createForm(InscriptionProType::class,$InscriptionPro);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()){
            $em->persist($InscriptionPro);
            $em->flush();
        }

        return $this->render('inscription_pro/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
