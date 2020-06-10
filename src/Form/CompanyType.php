<?php

namespace App\Form;

use App\Entity\Company;
use App\Form\SocialnetworkType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class CompanyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('imageFile', VichImageType::class, [
                'required' => false,])
            ->add('society', TextType::class)
            ->add('responsable', TextType::class)
            ->add('address', TextType::class)
            ->add('codepostal')
            ->add('ville') 
            ->add('activity', MetiersType::class)
            ->add('phone', TelType::class)
            ->add('email', EmailType::class)
            ->add('reseaux', SocialnetworkType::class, [
                'required' => false])
            ->add('presentation', TextareaType::class, [
                'required' => false])
            ->add('service', TextareaType::class, [
                'required' => false])
            ->add('tarif', TextareaType::class, [
                'required' => false])
            ->add('book', TextareaType::class, [
                'required' => false])
            ->add('horaire',TextareaType::class)
            ->add('fournisseur', TextareaType::class, [
                'required' => false])
            ->add('emploi', TextareaType::class, [
                'required' => false])
            ->add('SIRET', TextType::class)
            ->add('save', SubmitType::class)
            ->get('activity')
                ->remove('ville')
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Company::class,
        ]);
    }
}
