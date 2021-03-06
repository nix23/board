<?php

namespace Ntech\BoardBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Ntech\BoardBundle\Utils\Paginator;

class MainController extends Controller
{
	public function indexAction($page, $days)
	{
		$em = $this->getDoctrine()->getManager();
		$messagesRepository = $em->getRepository('NtechBoardBundle:Message');
		$usersRepository = $em->getRepository('NtechBoardBundle:User');

		$messagesAndRepostsTotalCount = $messagesRepository->getMessagesAndRepostsCount($days);
		$messagesAndRepostsPerPageCount = $this->container->getParameter('posts_count_on_main');

		$paginator = new Paginator($page, $messagesAndRepostsTotalCount, $messagesAndRepostsPerPageCount);
		if(!$paginator->is_current_page_valid())
		{
			throw $this->createNotFoundException('Wrong page number');
		}

		$messages = $messagesRepository->getAllMessagesAndReposts($days,
																					 $messagesAndRepostsPerPageCount,
																					 $paginator->get_offset());
		$messagesRepository->findRepliesCountPerEveryMessage($messages);

		if($this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY'))
		{
			$loggedUser = $this->getUser();
			$users = array();

			foreach($messages as $message)
			{
				$user = $message->getUser();
				if($user->getId() == $loggedUser->getId())
					$user->setAsCurrentLoggedUser();

				$users[] = $user;
			}

			$usersRepository->findIfEveryUserIsFollowedByLoggedUser($users, $loggedUser);
		}

		return $this->render('NtechBoardBundle:Main:main.html.twig', array(
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

	public function searchUserAction(Request $request)
	{
		$searchUsername = $request->query->get('username', 'empty');

		if($searchUsername == 'empty' or empty($searchUsername))
		{
			$this->get('session')->getFlashBag()->add('search_error', 'Please enter username!');
			return $this->redirect($this->generateUrl('main'));
		}
		else
		{
			$em = $this->getDoctrine()->getManager();
			$users = $em->getRepository('NtechBoardBundle:User')->findAllByUsername($searchUsername);

			$em->getRepository('NtechBoardBundle:User')->findMessagesCountPerEveryUser($users,
																												array("new", "replies", "reposts"));

			return $this->render('NtechBoardBundle:Main:searchResults.html.twig', array(
				'users' => $users
			));
		}
	}
}