<?php

namespace App\DataFixtures;



use App\Entity\Metiers;
use App\Entity\Company;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ActivityFixtures extends Fixture
{

    private $categorie = ['Batiment', 'Artisan','Mécanique','Intérieur'];
    private $metier = ['Plombier', 'Menuisier','Peintre','Éléctricien','Mécanicien-Auto','Mécanicien-Moto','Décorateur'];
    private $ville = ['Carcassonne', 'Trebes','Narbonne','Quillan','Limoux'];


    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 25; $i++) {
            $metier = (new Metiers())
            ->setCategorie($this->categorie[rand(0,3)])
            ->setMetier($this->metier[rand(0,6)])
            ->setVille($this->ville[rand(0,4)]);
            $manager->persist($metier);
        }
        $manager->flush();
    }
}
