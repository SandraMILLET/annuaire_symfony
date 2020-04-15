<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArtisanController extends AbstractController
{
    /**
     * @Route("/artisan", name="artisan")
     */
    public function artisan()
    {
        return $this->render('artisan/index.html.twig', [
            'controller_name' => 'ArtisanController',
        ]);
    }
}
