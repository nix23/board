<?php

namespace Ntech\BoardBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MainController extends Controller
{
	public function indexAction()
	{
		$em = $this->getDoctrine()->getEntityManager();

		$messages = $em->getRepository('NtechBoardBundle:Message')->getAllMessagesAndRepostsPerLastDay();

		return $this->render('NtechBoardBundle:Main:main.html.twig', array(
			'messages' => $messages
		));
	}

	public function searchUserAction(Request $request)
	{
		$searchUsername = $request->query->get('username', 'empty');

		if($searchUsername == 'empty')
		{
			echo "no username"; exit();
		}
		else
		{
			echo $searchUsername; exit();
		}
	}
}