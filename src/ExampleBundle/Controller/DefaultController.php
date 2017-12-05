<?php

namespace ExampleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('ExampleBundle:Default:index.html.twig');
    }
    /**
     * @Route("/about")
     */
    public function aboutAction()
    {
        return $this->render('ExampleBundle:Default:about.html.twig');
    }
}
