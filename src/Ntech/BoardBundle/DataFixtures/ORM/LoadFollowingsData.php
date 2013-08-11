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
		$createdUsers = array();

		for($count = 1; $count <= 40; $count++)
			$createdUsers[] = $em->merge($this->getReference("user{$count}"));

		for($i = 0; $i <= 39; $i++)
		{
			for($j = 0; $j <= 39; $j++)
			{
				if($i != $j)
					$createdUsers[$i]->addFollowedByMe($createdUsers[$j]);
			}
		}

		foreach($createdUsers as $user)
			$em->persist($user);

		$em->flush();
	}

	public function getOrder()
	{
		return 3;
	}
}