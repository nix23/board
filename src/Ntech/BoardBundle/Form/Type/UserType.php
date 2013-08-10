<?php
namespace Ntech\BoardBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('username', 'text');
		$builder->add('password', 'repeated', array(
			'first_name' => 'password',
			'second_name' => 'confirm',
			'type'        => 'password',
			'invalid_message' => 'Password fields must match.',
			'options' => array('attr' => array('class' => 'input')),
			'required' => true,
			'first_options' => array('label' => 'Password'),
			'second_options' => array('label' => 'Repeat password')
		));
		$builder->add('register', 'submit');
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'Ntech\BoardBundle\Entity\User'
		));
	}

	public function getName()
	{
		return 'user';
	}
}