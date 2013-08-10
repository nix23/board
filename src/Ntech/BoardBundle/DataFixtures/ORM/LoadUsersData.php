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
		$firstUser = new User();
		$firstUser->setUsername('user1');

		$factory = $this->container->get('security.encoder_factory');
		$encoder = $factory->getEncoder($firstUser);
		$encodedPassword = $encoder->encodePassword("testpassword", null);
		$firstUser->setPassword($encodedPassword);
		$firstUser->setAvatar("test-avatar.jpg");

		$secondUser = new User();
		$secondUser->setUsername('user2');
		$factory = $this->container->get('security.encoder_factory');
		$encoder = $factory->getEncoder($secondUser);
		$encodedPassword = $encoder->encodePassword("testpassword", null);
		$secondUser->setPassword($encodedPassword);

		$thirdUser = new User();
		$thirdUser->setUsername('user3');
		$factory = $this->container->get('security.encoder_factory');
		$encoder = $factory->getEncoder($thirdUser);
		$encodedPassword = $encoder->encodePassword("testpassword", null);
		$thirdUser->setPassword($encodedPassword);

		$em->persist($firstUser);
		$em->persist($secondUser);
		$em->persist($thirdUser);

		$em->flush();

		$this->addReference('first-user', $firstUser);
		$this->addReference('second-user', $secondUser);
		$this->addReference('third-user', $thirdUser);
	}

	public function getOrder()
	{
		return 1;
	}
}