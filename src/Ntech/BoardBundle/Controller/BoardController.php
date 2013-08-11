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

	public function showMyFollowersAction()
	{
		$em = $this->getDoctrine()->getEntityManager();

		$loggedUser = $this->getUser();
		$user = $em->getRepository('NtechBoardBundle:User')->getWithFollowers($loggedUser->getId());
		$userFollowers = $user->getMyFollowers();

		$em->getRepository('NtechBoardBundle:User')->findMessagesCountPerEveryUser($userFollowers,
																											array("new", "replies", "reposts"));

		return $this->render('NtechBoardBundle:Board:myfollowers.html.twig', array(
			'userFollowers' => $userFollowers
		));
	}
}