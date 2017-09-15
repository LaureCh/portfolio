<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function ViewAction()
    {
        return $this->render('AppBundle:Home:home.html.twig', array(
        ));
    }

}
