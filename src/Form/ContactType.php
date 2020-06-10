<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3;
use Karser\Recaptcha3Bundle\Form\Recaptcha3Type;

class ContactType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('email', TextType::class)
			->add('name', TextType::class)
			->add('tel', TextType::class)
			->add('object', TextType::class)
			->add('message', TextareaType::class)
			->add('captcha', Recaptcha3Type::class, [
				'constraints' => new Recaptcha3(),
				'action_name' => 'contact_form',
			]);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'data_class' => Contact::class,
		]);
	}
}
