<?php
namespace Ntech\BoardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Ntech\BoardBundle\Utils\Paginator;

class BoardController extends Controller
{
	public function showMyBoardAction($page, $days)
	{
		$fetchUserMessagesIds = array();

		$loggedUser = $this->getUser();
		$fetchUserMessagesIds[] = $loggedUser->getId();

		$em = $this->getDoctrine()->getManager();
		$userRepository = $em->getRepository('NtechBoardBundle:User');
		$user = $userRepository->getWithFollowedUsers($loggedUser->getId());
		$followedUsers = $user->getFollowedByMe();

		foreach($followedUsers as $followedUser)
		{
			$fetchUserMessagesIds[] = $followedUser->getId();
		}

		$messageRepository = $em->getRepository("NtechBoardBundle:Message");
		$messagesTotalCount = $messageRepository->getMessagesTotalCountByUserIds($fetchUserMessagesIds, $days);
		$messagesPerPageCount = $this->container->getParameter('posts_count_on_board');

		$paginator = new Paginator($page, $messagesTotalCount, $messagesPerPageCount);
		if(!$paginator->is_current_page_valid())
		{
			throw $this->createNotFoundException('Wrong page number');
		}

		$messages = $messageRepository->getAllMessagesByUserIds($fetchUserMessagesIds,
																				  $days,
																				  $messagesPerPageCount,
																				  $paginator->get_offset());
		$messageRepository->findRepliesCountPerEveryMessage($messages);

		$users = array();
		foreach($messages as $message)
		{
			$user = $message->getUser();
			if($user->getId() == $loggedUser->getId())
				$user->setAsCurrentLoggedUser();

			$users[] = $user;
		}

		$userRepository->findIfEveryUserIsFollowedByLoggedUser($users, $loggedUser);

		return $this->render('NtechBoardBundle:Board:myboard.html.twig', array(
			'messages' => $messages,
			'pages' => $paginator->make_pages('compact'),
			'currentPage' => $page,
			'daysCountOptions' => $this->createDaysCountOptions($days),
			'daysCountCurrentValue' => $days
		));
	}

	private function createDaysCountOptions($daysCountCurrentValue)
	{
		$daysCountOptions = array(
			(object) array("label" => "Day",   "value" => "1",  "selected" => false),
			(object) array("label" => "Week",  "value" => "7",  "selected" => false),
			(object) array("label" => "Month", "value" => "31", "selected" => false)
		);

		foreach($daysCountOptions as $daysCountOption)
		{
			if((int)$daysCountOption->value == $daysCountCurrentValue)
				$daysCountOption->selected = true;
		}

		return $daysCountOptions;
	}

	public function showMyFollowersAction()
	{
		$em = $this->getDoctrine()->getManager();

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