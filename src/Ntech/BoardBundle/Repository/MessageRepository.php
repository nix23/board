<?php

namespace Ntech\BoardBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * MessageRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MessageRepository extends EntityRepository
{
	public function getAllMessagesAndReposts($days = 1, $limit = 50, $offset = 0)
	{
		$query = $this->getEntityManager()->createQuery(
			'SELECT m, u FROM NtechBoardBundle:Message m JOIN m.user u WHERE m.addedAt > :date
			AND m.replyToMessage is NULL ORDER BY m.addedAt DESC'
		)->setParameter('date', date('Y-m-d H:i:s', time() - (60 * 60 * 24 * $days)))
		->setMaxResults($limit)
		->setFirstResult($offset);

		return $query->getResult();
	}

	public function getMessagesAndRepostsCount($days = 1)
	{
		$query = $this->getEntityManager()->createQuery(
			'SELECT COUNT(m.id) FROM NtechBoardBundle:Message m WHERE m.addedAt > :date
			 AND m.replyToMessage is NULL'
		)->setParameter('date', date('Y-m-d H:i:s', time() - (60 * 60 * 24 * $days)));

		return $query->getSingleScalarResult();
	}

	public function getAllMessagesByUserIds($userIds = array())
	{
		if(!is_array($userIds) || empty($userIds))
			throw new \Exception("Wrong \$userIds passed to getAllMessagesByUserIds");

		for($i = 0; $i < count($userIds); $i++)
			$userIds[$i] = (int)$userIds[$i];

		$userIdsString = implode(", ", $userIds);

		$query = $this->getEntityManager()->createQuery(
			"SELECT m FROM NtechBoardBundle:Message m JOIN m.user u
			 WHERE u.id IN ($userIdsString) ORDER BY m.addedAt DESC"
		);

		return $query->getResult();
	}

	public function isMessageRepostedByUser($messageId, $userId)
	{
		$query = $this->getEntityManager()->createQuery(
			"SELECT COUNT(om.id) FROM NtechBoardBundle:Message m JOIN m.originalMessage om
			 JOIN m.user u WHERE u.id = :userId AND om.id = :messageId"
		)->setParameter('messageId', $messageId)->setParameter('userId', $userId);

		$count = $query->getSingleScalarResult();
		return ($count > 0) ? true : false;
	}
}
