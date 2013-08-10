<?php
namespace NTech\BoardBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use NTech\BoardBundle\Entity\User;

class LoadFollowingsData extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $em)
	{
		$firstUser = $em->merge($this->getReference('first-user'));
		$secondUser = $em->merge($this->getReference('second-user'));
		$thirdUser = $em->merge($this->getReference('third-user'));

		$firstUser->addFollowedByMe($secondUser);
		$firstUser->addFollowedByMe($thirdUser);

		$secondUser->addFollowedByMe($firstUser);
		$secondUser->addFollowedByMe($thirdUser);

		$thirdUser->addFollowedByMe($firstUser);
		$thirdUser->addFollowedByMe($secondUser);

		$em->persist($firstUser);
		$em->persist($secondUser);
		$em->persist($thirdUser);

		$em->flush();
	}

	public function getOrder()
	{
		return 3;
	}
}