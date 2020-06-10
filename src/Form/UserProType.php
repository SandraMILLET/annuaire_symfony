<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\UserPro;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class UserProType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('imageFile', VichImageType::class, [
            'required' => false,])
            ->add('society',  TextType::class, ['required' => false])
            ->add('SIRET', null, ['label' => 'Siret']);
            
            
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => UserPro::class,
        ]);
    }
}
