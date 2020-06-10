<?php

namespace App\Form;

use App\Entity\Research;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PropertySearchType extends AbstractType
{

	public function buildForm(FormBuilderInterface $builder, array $options)
	{

		$builder
			->add('categories', EntityType::class, [
				'class' => Research::class,
				'choice_label' => 'categories',
				'required' => false,
				'placeholder' => 'Catégorie'
			])
			->add('cities', EntityType::class, [
				'class' => Research::class,
				'choice_label' => 'cities',
				'required' => false,
				'placeholder' => 'Ville'
			])
			->add('professionnals', EntityType::class, [
				'class' => Research::class,
				'choice_label' => 'professionnals',
				'required' => false,
				'placeholder' => 'Métier'
			])
			->add('Rechercher', SubmitType::class, [
				'attr' => ['class' => 'btn btn-outline-light']
			]);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'data_class' => Research::class,
			'csrf_protection' => false
		]);
	}
}
