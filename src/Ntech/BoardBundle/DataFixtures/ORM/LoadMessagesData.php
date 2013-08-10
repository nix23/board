<?php
namespace NTech\BoardBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use NTech\BoardBundle\Entity\Message;

class LoadMessagesData extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $em)
	{
		$loadedUsers = array();
		$loadedUsers[] = $em->merge($this->getReference('first-user'));
		$loadedUsers[] = $em->merge($this->getReference('second-user'));
		$loadedUsers[] = $em->merge($this->getReference('third-user'));

		$addRepliesAndRepostsToMessages = array();
		foreach($loadedUsers as $user)
		{
			for($i = 0; $i <= 2; $i++)
			{
				$postedMessageByUser = new Message();
				$postedMessageByUser->setText('TestMessage');
				$postedMessageByUser->setUser($user);

				$em->persist($postedMessageByUser);

				if($i == 2)
					$addRepliesAndRepostsToMessages[] = $postedMessageByUser;
			}
		}

		for($i = 2; $i >= 1; $i--)
		{
			$replyAndRepostByUser = $loadedUsers[0];

			$reply = new Message();
			$reply->setUser($replyAndRepostByUser);
			$reply->setText('RepostTest');
			$reply->setOriginalMessage($addRepliesAndRepostsToMessages[$i]);

			$repost = new Message();
			$repost->setUser($replyAndRepostByUser);
			$repost->setText('ReplyTest');
			$repost->setReplyToMessage($addRepliesAndRepostsToMessages[$i]);

//			$addReplyAndRepostToMessage = $addRepliesAndRepostsToMessages[$i];
//			$addReplyAndRepostToMessage->addReplie($reply);
//			$addReplyAndRepostToMessage->addRepost($repost);

			$em->persist($reply);
			$em->persist($repost);
		}

		$em->flush();
	}

	public function getOrder()
	{
		return 2;
	}
}