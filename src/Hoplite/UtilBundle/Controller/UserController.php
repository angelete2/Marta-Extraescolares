<?php

namespace Hoplite\UtilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\SecurityContext;

class UserController extends Controller
{
    /**
     *
     * @Template()
     */
    public function loginAction()
    {
      $request = $this->getRequest();
      $session = $request->getSession();

      $err = $request->attributes->get (SecurityContext::AUTHENTICATION_ERROR, $session->get(SecurityContext::AUTHENTICATION_ERROR));

      return array ('last_username' => $session->get(SecurityContext::LAST_USERNAME),
                    'error'         => $err);
    }


    /**
     *
     * Enter description here ...
     */
//     public function checkAction()
//     {
//       return array ();
//     }
}
