<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // main
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'main');
            }

            return array (  '_controller' => 'Ntech\\BoardBundle\\Controller\\MainController::indexAction',  '_route' => 'main',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Ntech\\BoardBundle\\Controller\\AuthorizationController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'Ntech\\BoardBundle\\Controller\\AuthorizationController::registerAction',  '_route' => 'register',);
        }

        // myboard
        if ($pathinfo === '/myboard') {
            return array (  '_controller' => 'Ntech\\BoardBundle\\Controller\\BoardController::showMyBoardAction',  '_route' => 'myboard',);
        }

        // search_user
        if ($pathinfo === '/search_user') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_search_user;
            }

            return array (  '_controller' => 'Ntech\\BoardBundle\\Controller\\MainController::searchUserAction',  '_route' => 'search_user',);
        }
        not_search_user:

        // my_followers
        if ($pathinfo === '/my_followers') {
            return array (  '_controller' => 'Ntech\\BoardBundle\\Controller\\BoardController::showMyFollowersAction',  '_route' => 'my_followers',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
