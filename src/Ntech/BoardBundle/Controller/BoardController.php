<?php
namespace Ntech\BoardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class BoardController extends Controller
{
	public function showMyBoardAction()
	{
		$fetchUserMessagesIds = array();

		$loggedUser = $this->getUser();
		$fetchUserMessagesIds[] = $loggedUser->getId();

		$em = $this->getDoctrine()->getEntityManager();
		$user = $em->getRepository('NtechBoardBundle:User')->getWithFollowedUsers($loggedUser->getId());
		$followedUsers = $user->getFollowedByMe();

		foreach($followedUsers as $followedUser)
		{
			$fetchUserMessagesIds[] = $followedUser->getId();
		}

		$messages = $em->getRepository('NtechBoardBundle:Message')->getAllMessagesByUserIds($fetchUserMessagesIds);

		return $this->render('NtechBoardBundle:Board:myboard.html.twig', array(
			'messages' => $messages,
			'loggedUser' => $loggedUser
		));
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

	public function showMyFollowersAction()
	{
		$em = $this->getDoctrine()->getEntityManager();

		$loggedUser = $this->getUser();
		$user = $em->getRepository('NtechBoardBundle:User')->getWithFollowers($loggedUser->getId());
		$userFollowers = $user->getMyFollowers();

		if(count($userFollowers) > 0)
		{
			$userIds = array();
			foreach($userFollowers as $follower)
				$userIds[] = $follower->getId();

			$result = $em->getRepository('NtechBoardBundle:User')->findMessagesCountByUserIds($userIds, "new");
			$this->attachMessagesCountToUsersByMatchingIds($userFollowers, $result, "new");

			$result = $em->getRepository('NtechBoardBundle:User')->findMessagesCountByUserIds($userIds, "replies");
			$this->attachMessagesCountToUsersByMatchingIds($userFollowers, $result, "replies");

			$result = $em->getRepository('NtechBoardBundle:User')->findMessagesCountByUserIds($userIds, "reposts");
			$this->attachMessagesCountToUsersByMatchingIds($userFollowers, $result, "reposts");
		}

		return $this->render('NtechBoardBundle:Board:myfollowers.html.twig', array(
			'userFollowers' => $userFollowers
		));
	}
}