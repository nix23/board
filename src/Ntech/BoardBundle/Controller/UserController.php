<?php

namespace Ntech\BoardBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ntech\BoardBundle\Utils\AjaxResponse;

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

		$userRepository->findIfEveryuserIsFollowedByLoggedUser(
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
}