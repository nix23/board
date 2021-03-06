<?php

namespace Ntech\BoardBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends EntityRepository
{
	public function getWithFollowers($userId = null)
	{
		$query = $this->getEntityManager()->createQuery(
			'SELECT u, f FROM NtechBoardBundle:User u LEFT JOIN u.myFollowers f
			 WHERE u.id = :userId'
		)->setParameter('userId', $userId);

		return $query->getSingleResult();
	}

	public function getWithFollowedUsers($userId = null)
	{
		$query = $this->getEntityManager()->createQuery(
			"SELECT u, f FROM NtechBoardBundle:User u LEFT JOIN u.followedByMe f
			 WHERE u.id = :userId"
		)->setParameter('userId', $userId);

		return $query->getSingleResult();
	}

	public function findAllByUsername($username)
	{
		$query = $this->getEntityManager()->createQuery(
			"SELECT u FROM NtechBoardBundle:User u WHERE u.username LIKE :username"
		)->setParameter('username', "%{$username}%");

		return $query->getResult();
	}

	private function attachMessagesCountToUsersByMatchingIds($users = array(),
																				$messagesCountData = array(),
																				$messagesType = "new")
	{
		if(count($messagesCountData) < 1)
			return;

		switch($messagesType)
		{
			case "new":
				$setCountMethod = "setNewMessagesCount";
				break;

			case "replies":
				$setCountMethod = "setRepostsCount";
				break;

			case "reposts":
				$setCountMethod = "setRepliesCount";
				break;

			default:
				throw new \Exception("Unknown messages type");
				break;
		}

		foreach($messagesCountData as $countDataArray)
		{
			$userId = $countDataArray["id"];
			$messagesCount = $countDataArray["messagesCount"];

			foreach($users as $user)
			{
				if($user->getId() == $userId)
				{
					$user->$setCountMethod($messagesCount);
				}
			}
		}
	}

	public function findMessagesCountPerEveryUser($users = array(), $messageTypes = array())
	{
		if(count($users) < 1)
			return;

		if(empty($messageTypes))
			throw new \Exception("Empty \$messageTypes passed to findMessagesCountPerEveryUser.");

		foreach($messageTypes as $messageType)
		{
			if(!in_array($messageType, array("new", "replies", "reposts")))
			{
				$errorMsg  = "Wrong \$messageType = '{$messageType}'' passed ";
				$errorMsg .= "to findMessagesCountPerEveryUser.";
				throw new \Exception($errorMsg);
			}
		}

		$userIds = array();
		foreach($users as $user)
			$userIds[] = $user->getId();

		if(in_array("new", $messageTypes))
		{
			$result = $this->findMessagesCountByUserIds($userIds, "new");
			$this->attachMessagesCountToUsersByMatchingIds($users, $result, "new");
		}

		if(in_array("replies", $messageTypes))
		{
			$result = $this->findMessagesCountByUserIds($userIds, "replies");
			$this->attachMessagesCountToUsersByMatchingIds($users, $result, "replies");
		}

		if(in_array("reposts", $messageTypes))
		{
			$result = $this->findMessagesCountByUserIds($userIds, "reposts");
			$this->attachMessagesCountToUsersByMatchingIds($users, $result, "reposts");
		}

		return $users;
	}

	public function findMessagesCountByUserIds($userIds = array(),
															 $messagesType = "new")
	{
		if(!is_array($userIds) || empty($userIds))
			throw new \Exception("Wrong \$userIds passed to findMessagesCountByUserIds");

		switch($messagesType)
		{
			case "new":
				$messagesConditions  = "";
				$messagesConditions .= "AND m.replyToMessage is NULL ";
				$messagesConditions .= "AND m.originalMessage is NULL";
				break;

			case "replies":
				$messagesConditions = "AND m.replyToMessage is NOT NULL";
				break;

			case "reposts":
				$messagesConditions = "AND m.originalMessage is NOT NULL";
				break;

			default:
				throw new \Exception("Unknown messages type");
				break;
		}

		for($i = 0; $i < count($userIds); $i++)
			$userIds[$i] = (int)$userIds[$i];

		$userIdsString = implode(", ", $userIds);

		$query = $this->getEntityManager()->createQuery(
			"SELECT u.id, COUNT(m.id) AS messagesCount FROM NtechBoardBundle:User u JOIN u.messages m
			 WHERE u.id IN ($userIdsString) {$messagesConditions} GROUP BY u.id"
		);

		return $query->getResult();
	}

	public function findIfEveryUserIsFollowedByLoggedUser($users, $loggedUser)
	{
		$userIds = array();
		foreach($users as $user)
		{
			if(!$user->isCurrentLoggedUser())
				$userIds[] = (int)$user->getId();
		}

		if(count($userIds) < 1)
			return;

		$userIdsString = implode(", ", $userIds);

		$query = $this->getEntityManager()->createQuery(
			"SELECT u.id FROM NtechBoardBundle:User u JOIN u.myFollowers f
			 WHERE u.id IN ($userIdsString) AND f.id = :loggedUserId"
		)->setParameter('loggedUserId', $loggedUser->getId());

		$resultSet = $query->getResult();
		foreach($resultSet as $row)
		{
			foreach($users as $user)
			{
				if($user->getId() == $row["id"])
					$user->setAsFollowedByLoggedUser();
			}
		}
	}
}
