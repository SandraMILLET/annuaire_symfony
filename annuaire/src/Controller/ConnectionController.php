<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;



class ConnectionController  extends AbstractController  
{

    /**
     * @Route("/connexion", name="connexion") 
     */
    public function Connect(){
        return $this->render('connexion/index.html.twig', [
            'controller_name' => 'ConnectionController',
        ]);
        
    }

}












?>