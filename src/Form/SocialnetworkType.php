<?php

namespace App\Form;

use App\Entity\Socialnetwork;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SocialnetworkType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('facebook', TextType::class, [
                'required' => false
            ])
            ->add('twitter', TextType::class, [
                'required' => false
            ])
            ->add('linkedin', TextType::class, [
                'required' => false
            ])
            ->add('pinterest', TextType::class, [
                'required' => false
            ])
            ->add('youtube', TextType::class, [
                'required' => false
            ])
            ->add('instagram', TextType::class, [
                'required' => false
            ])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Socialnetwork::class,
        ]);
    }
}
