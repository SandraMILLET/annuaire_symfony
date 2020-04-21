<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/rechercher", name="rechercher")
     */
    public function rechercher()
    {
        $noms = ["M.PIEDEBICHE Albert", "M.TUNING Henri", "Mme LAFONTE Murielle", "Mme CASTAGNE Magalie"];

        return $this->render(
            'rechercher/index.html.twig',
            [
                'pros' => $noms
            ]
        );
    }
}
