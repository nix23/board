<?php

namespace Ntech\BoardBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ntech\BoardBundle\Utils\AjaxResponse;
use Ntech\BoardBundle\Utils\Paginator;

class UserController extends Controller
{
	public function changeFollowedByMeStatusAction($userId)
	{
		if(!$this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY'))
			throw $this->createNotFoundException('Authorization required');

		$loggedUser = $this->getUser();

		$em = $this->getDoctrine()->getEntityManager();
		$userRepository = $em->getRepository("NtechBoardBundle:User");
		$changeFollowedByMeStatusUser = $userRepository->find($userId);

		$ajaxResponse = new AjaxResponse();

		if(!$changeFollowedByMeStatusUser)
		{
			$ajaxResponse->setError("notFound", "No user found for passed id.");
			return $ajaxResponse->getResponse();
		}

		$userRepository->findIfEveryUserIsFollowedByLoggedUser(
			array($changeFollowedByMeStatusUser), $loggedUser
		);

		if($changeFollowedByMeStatusUser->isFollowedByLoggedUser())
		{
			$loggedUser->removeFollowedByMe($changeFollowedByMeStatusUser);
			$ajaxResponse->setData('newFollowStatus', 'Follow');
		}
		else
		{
			$loggedUser->addFollowedByMe($changeFollowedByMeStatusUser);
			$ajaxResponse->setData('newFollowStatus', 'Unfollow');
		}

		$em->flush();

		$ajaxResponse->setData('userId', $userId);
		$ajaxResponse->setCallback('updateFollowStatus');
		$ajaxResponse->setSuccessfulResult();

		return $ajaxResponse->getResponse();
	}

	public function showProfileAction($username, $page)
	{
		$em = $this->getDoctrine()->getEntityManager();
		$userRepository = $em->getRepository("NtechBoardBundle:User");

		$user = $userRepository->findOneBy(array("username" => $username));
		if(!$user)
		{
			throw $this->createNotFoundException('User not exists');
		}

		if($this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY'))
		{
			$loggedUser = $this->getUser();
			if($loggedUser->getId() == $user->getId())
				$user->setAsCurrentLoggedUser();

			if(!$user->isCurrentLoggedUser())
			{
				$userRepository->findIfEveryUserIsFollowedByLoggedUser(array($user), $loggedUser);
			}
		}

		$userRepository->findMessagesCountPerEveryUser(array($user),
																	  array("new", "replies", "reposts"));

		$messageRepository = $em->getRepository("NtechBoardBundle:Message");
		$messagesTotalCount = $messageRepository->getMessagesTotalCountByUserIds(array($user->getId()));
		$messagesPerPageCount = $this->container->getParameter("posts_count_on_profile");

		$paginator = new Paginator($page, $messagesTotalCount, $messagesPerPageCount);
		if(!$paginator->is_current_page_valid())
		{
			throw $this->createNotFoundException("Wrong page number");
		}

		$messages = $messageRepository->getAllMessagesByUserIds(array($user->getId()),
																				  null,
																				  $messagesPerPageCount,
																				  $paginator->get_offset());
		$messageRepository->findRepliesCountPerEveryMessage($messages);

		return $this->render("NtechBoardBundle:User:profile.html.twig", array(
			'user' => $user,
			'messages' => $messages,
			'currentPage' => $page,
			'pages' => $paginator->make_pages('compact')
		));
	}
}