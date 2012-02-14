<?php

namespace Hoplite\TeachersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }


    /**
     *
     * @Route("/usuario/{login}")
     * @Template()
     */
    public function userAction($login)
    {

      $em = $this->getDoctrine()->getEntityManager();
      $usuario = $em->getRepository('TeachersBundle:Teacher')->findOneByLogin($login);

      return array ('user' => $usuario);

    }
}
