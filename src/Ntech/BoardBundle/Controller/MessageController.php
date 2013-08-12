<?php

namespace Ntech\BoardBundle\Controller;
use Ntech\BoardBundle\Utils\AjaxResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Ntech\BoardBundle\Entity\Message;

class MessageController extends Controller
{
	public function checkIfMessageAlreadyRepostedAction($originalMessageId)
	{
		if(!$this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY'))
			throw $this->createNotFoundException('Authorization required');

		$loggedUser = $this->getUser();

		$em = $this->getDoctrine()->getEntityManager();
		$messageRepository = $em->getRepository("NtechBoardBundle:Message");

		$ajaxResponse = new AjaxResponse();

		$originalMessage = $messageRepository->find($originalMessageId);
		if(!$originalMessage)
		{
			$ajaxResponse->setError("notFound", "No message found for passed id.");
			return $ajaxResponse->getResponse();
		}

		if($messageRepository->isMessageRepostedByUser($originalMessageId, $loggedUser->getId()))
		{
			$ajaxResponse->setError("messageAlreadyReposted", "You have already reposted this message.");
			return $ajaxResponse->getResponse();
		}

		$ajaxResponse->setCallback('loadRepostForm');
		$ajaxResponse->setSuccessfulResult();

		return $ajaxResponse->getResponse();
	}

	public function repostMessageAction($originalMessageId)
	{
		if(!$this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY'))
			throw $this->createNotFoundException('Authorization required');

		$loggedUser = $this->getUser();

		$em = $this->getDoctrine()->getEntityManager();
		$messageRepository = $em->getRepository("NtechBoardBundle:Message");

		$ajaxResponse = new AjaxResponse();

		if($messageRepository->isMessageRepostedByUser($originalMessageId, $loggedUser->getId()))
		{
			$ajaxResponse->setError("messageAlreadyReposted", "You have already reposted this message.");
			return $ajaxResponse->getResponse();
		}

		$originalMessage = $messageRepository->find($originalMessageId);
		if(!$originalMessage)
		{
			$ajaxResponse->setError("notFound", "No message found for passed id.");
			return $ajaxResponse->getResponse();
		}

		$request = Request::createFromGlobals();
		$messageData = $request->request->get('message');

		$repost = new Message();
		$repost->setUser($loggedUser);
		$repost->setText($messageData["responseText"]);
		$repost->setOriginalMessage($originalMessage);

		$em->persist($repost);
		$em->flush();

		$ajaxResponse->setData("url", $this->generateUrl("main"));
		$ajaxResponse->setCallback("redirect");
		$ajaxResponse->setSuccessfulResult();

		return $ajaxResponse->getResponse();
	}
}