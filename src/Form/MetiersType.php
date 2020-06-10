<?php

namespace App\Form;

use App\Entity\Company;
use App\Entity\Metiers;
use App\Form\CompanyType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class MetiersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('categorie', ChoiceType::class, [
            'required' => false,
            'label' => false,
            'placeholder' => 'Catégorie',
            'choices' => [
                'Santé'  => 'Santé',
                'Bâtiment' => 'Bâtiment',
                'Hotellerie' =>'Hotellerie',
                'Restauration' => 'Restauration',
                'Beauté' => 'Beauté',
                'Jardin' => 'Jardin',
                'Sport' => 'Sport',
                'Transport' => 'Transport',
                'Service aux professionnels' => 'Service aux professionnels',
                'Service aux particuliers' => 'Service aux particuliers',
                'Association' => 'Association',
                'Divers' => 'Divers'
            ]])
            ->add('ville')
            ->add('metier')
            ;
        }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Metiers::class,
        ]);
    }
}