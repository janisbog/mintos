<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {   
         $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render(
            'AppBundle:Security:login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $lastUsername,
                'error'         => $error,
            )
        );
    }

    /**
     * @Route("/login_check", name="login_check")
     */
    public function loginCheckAction()
    {
        return $this->render('AppBundle:Security:login_check.html.twig', array(
            // ...
        ));
    }
    
    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {
        return null;
    }

}
//Available types: array, simple_array, json_array, object, 
//boolean, integer, smallint, bigint, string, text, datetime, datetimetz, 
//date, time, decimal, float, binary, blob, guid.
