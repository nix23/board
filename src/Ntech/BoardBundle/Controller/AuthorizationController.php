<?php
namespace Ntech\BoardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Ntech\BoardBundle\Entity\User;
use Ntech\BoardBundle\Form\Type\UserType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class AuthorizationController extends Controller
{
	public function loginAction()
	{
		$request = $this->getRequest();
		$session = $request->getSession();

		if($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR))
		{
			$error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
		}
		else
		{
			$error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
			$session->remove(SecurityContext::AUTHENTICATION_ERROR);
		}

		return $this->render('NtechBoardBundle:Authorization:login.html.twig', array(
			'last_username' => $session->get(SecurityContext::LAST_USERNAME),
			'error' => $error
		));
	}

	public function registerAction(Request $request)
	{
		$user = new User();

		$form = $this->createForm(new UserType(), $user);
		$form->handleRequest($request);

		if($form->isValid())
		{
			$em = $this->getDoctrine()->getManager();

			$factory = $this->container->get('security.encoder_factory');
			$encoder = $factory->getEncoder($user);
			$encodedPassword = $encoder->encodePassword($user->getPassword(), null);
			$user->setPassword($encodedPassword);

			$em->persist($user);
			$em->flush();

			$token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
			$this->container->get('security.context')->setToken($token);

			return $this->redirect($this->generateUrl('myboard'));
		}

		return $this->render('NtechBoardBundle:Authorization:registration.html.twig', array(
			'form' => $form->createView()
		));
	}
}