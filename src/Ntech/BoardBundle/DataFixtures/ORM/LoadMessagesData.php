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
		$createNewMessagesByUsers = array();
		$createRepliesAndRepostsByUsers = array();

		for($count = 1; $count <= 40; $count++)
		{
			$nextUser = $em->merge($this->getReference("user{$count}"));

			if($count <= 30)
				$createNewMessagesByUsers[] = $nextUser;
			else
				$createRepliesAndRepostsByUsers[] = $nextUser;
		}

		$messageAddedAt = new \DateTime();
		$messageAddedAt->sub(new \DateInterval('P1D'));
		$messageAddedAt = new \DateTime($messageAddedAt->format('Y-m-d H:i:s'));
		$newMessageNumber = 1;
		$replyNumber = 1;
		$repostNumber = 1;

		// Adding 2 new messages by every user.(from first 30)
		// Also adding reply and repost to each of these messages
		// by other users.(last 10)
		foreach($createNewMessagesByUsers as $createNewMessageByUser)
		{
			for($i = 0; $i <= 1; $i++)
			{
				$newMessageByUser = new Message();
				$newMessageByUser->setText("New Message: {$newMessageNumber}");
				$newMessageByUser->setUser($createNewMessageByUser);
				$newMessageByUser->setAddedAt($messageAddedAt);

				$em->persist($newMessageByUser);

				foreach($createRepliesAndRepostsByUsers as $createReplyAndRepostByUser)
				{
					$messageAddedAt->add(new \DateInterval('PT60S'));
					$messageAddedAt = new \DateTime($messageAddedAt->format('Y-m-d H:i:s'));

					$replyToNewMessage = new Message();
					$replyToNewMessage->setUser($createReplyAndRepostByUser);
					$replyToNewMessage->setText("Reply: {$replyNumber}");
					$replyToNewMessage->setAddedAt($messageAddedAt);
					$replyToNewMessage->setReplyToMessage($newMessageByUser);
					$replyNumber++;

					$messageAddedAt->add(new \DateInterval('PT60S'));
					$messageAddedAt = new \DateTime($messageAddedAt->format('Y-m-d H:i:s'));

					$repostToNewMessage = new Message();
					$repostToNewMessage->setUser($createReplyAndRepostByUser);
					$repostToNewMessage->setText("Repost: {$repostNumber}");
					$repostToNewMessage->setAddedAt($messageAddedAt);
					$repostToNewMessage->setOriginalMessage($newMessageByUser);
					$repostNumber++;

					$em->persist($replyToNewMessage);
					$em->persist($repostToNewMessage);
				}

				$messageAddedAt->add(new \DateInterval('PT60S'));
				$messageAddedAt = new \DateTime($messageAddedAt->format('Y-m-d H:i:s'));
				$newMessageNumber++;
			}
		}

		$em->flush();
	}

	public function getOrder()
	{
		return 2;
	}
}