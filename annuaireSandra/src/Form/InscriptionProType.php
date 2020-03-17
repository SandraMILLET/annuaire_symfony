<?php

namespace App\Form;

use App\Entity\InscriptionPro;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InscriptionProType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Name')
            ->add('Firstname')
            ->add('Mail')
            ->add('Password')
            ->add('Siret')
            ->add('Doc')
            ->add('Trades')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => InscriptionPro::class,
        ]);
    }
}
