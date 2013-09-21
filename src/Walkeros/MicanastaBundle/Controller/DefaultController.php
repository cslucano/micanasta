<?php

namespace Walkeros\MicanastaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WalkerosMicanastaBundle:Default:index.html.twig', array());
    }
}
