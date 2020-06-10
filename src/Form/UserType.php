<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\UserPro;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class UserType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('email', EmailType::class)
			->add('nom', TextType::class)
			->add('prenom', TextType::class)
			->add('pro', UserProType::class)
			->add('adresse', null, ['required' => false])
			->add('codepostal', null, ['required' => false])
			->add('ville', null, ['required' => false])
			->add('tel', null, ['required' => false])
			->add('password', PasswordType::class, ['required' => false, 'label' => 'Mot de passe'])
			->add(
				'roles',
				ChoiceType::class,
				array(
					'multiple' => true,
					'choices' => [
						'pro' => 'ROLE_PRO',
						'admin' => 'ROLE_ADMIN',
						'user' => 'ROLE_USER',
					],
					'label' => 'Rôle'
				)
			)
			->add('save', SubmitType::class)
			;
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'data_class' => User::class,
		]);
	}
}
