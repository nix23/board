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

	public function repostMessageAction($originalMessageId,
													$redirectToRouteAfterRepost)
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

		$ajaxResponse->setData("url", $this->generateUrl($redirectToRouteAfterRepost));
		$ajaxResponse->setCallback("redirect");
		$ajaxResponse->setSuccessfulResult();

		return $ajaxResponse->getResponse();
	}

	public function loadRepliesAction($messageId)
	{
		$em = $this->getDoctrine()->getEntityManager();
		$messageRepository = $em->getRepository("NtechBoardBundle:Message");

		$ajaxResponse = new AjaxResponse();

		$message = $messageRepository->getWithReplies($messageId);
		if(!$message)
		{
			$ajaxResponse->setError("notFound", "No message found for passed id.");
			return $ajaxResponse->getResponse();
		}

		$repliesHtml = $this->renderView('NtechBoardBundle:Shared:replies.html.twig', array(
			'replies' => $message->getReplies()
		));

		$ajaxResponse->setData("repliesHtml", $repliesHtml);
		$ajaxResponse->setCallback("showRepliesList");
		$ajaxResponse->setSuccessfulResult();

		return $ajaxResponse->getResponse();
	}

	public function replyToMessageAction($originalMessageId)
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

		$request = Request::createFromGlobals();
		$messageData = $request->request->get('message');

		$reply = new Message();
		$reply->setUser($loggedUser);
		$reply->setText($messageData["responseText"]);
		$reply->setReplyToMessage($originalMessage);

		$validator = $this->get('validator');
		$errors = $validator->validate($reply);

		if(count($errors) > 0)
		{
			$errorMsg = "";
			foreach($errors as $error)
				$errorMsg .= $error->getMessage() . "\n";

			$ajaxResponse->setError("validationErrors", $errorMsg);
			return $ajaxResponse->getResponse();
		}

		$em->persist($reply);
		$em->flush();

		$message = $messageRepository->getWithReplies($originalMessageId);
		$repliesHtml = $this->renderView('NtechBoardBundle:Shared:replies.html.twig', array(
			'replies' => $message->getReplies()
		));

		$ajaxResponse->setData("originalMessageId", $originalMessageId);
		$ajaxResponse->setData("repliesHtml", $repliesHtml);
		$ajaxResponse->setCallback("updateRepliesList");
		$ajaxResponse->setSuccessfulResult();

		return $ajaxResponse->getResponse();
	}

	public function addNewMessageAction()
	{
		if(!$this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY'))
			throw $this->createNotFoundException('Authorization required');

		$loggedUser = $this->getUser();

		$em = $this->getDoctrine()->getEntityManager();
		$messageRepository = $em->getRepository("NtechBoardBundle:Message");

		$ajaxResponse = new AjaxResponse();

		$request = Request::createFromGlobals();
		$messageData = $request->request->get('message');

		$newMessage = new Message();
		$newMessage->setUser($loggedUser);
		$newMessage->setText($messageData["text"]);

		$validator = $this->get('validator');
		$errors = $validator->validate($newMessage);

		if(count($errors) > 0)
		{
			$errorMsg = "";
			foreach($errors as $error)
				$errorMsg .= $error->getMessage() . "\n";

			$ajaxResponse->setError("validationErrors", $errorMsg);
			return $ajaxResponse->getResponse();
		}

		$em->persist($newMessage);
		$em->flush();

		$ajaxResponse->setData("url", $this->generateUrl("myboard"));
		$ajaxResponse->setCallback("redirect");
		$ajaxResponse->setSuccessfulResult();

		return $ajaxResponse->getResponse();
	}
}