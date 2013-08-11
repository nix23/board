<?php
namespace NTech\BoardBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use NTech\BoardBundle\Entity\User;

class LoadUsersData extends AbstractFixture implements OrderedFixtureInterface, FixtureInterface, ContainerAwareInterface
{
	private $container;

	public function setContainer(ContainerInterface $container = null)
	{
		$this->container = $container;
	}

	public function load(ObjectManager $em)
	{
		// Creating 40 test users
		for($count = 1; $count <= 40; $count++)
		{
			$user = new User();
			$user->setUsername("user{$count}");

			$factory = $this->container->get('security.encoder_factory');
			$encoder = $factory->getEncoder($user);
			$encodedPassword = $encoder->encodePassword("testpassword", null);
			$user->setPassword($encodedPassword);

			if($count % 2 == 0)
				$user->setAvatar("test-avatar.jpg");

			$em->persist($user);
			$this->addReference("user{$count}", $user);
		}

		$em->flush();
	}

	public function getOrder()
	{
		return 1;
	}
}