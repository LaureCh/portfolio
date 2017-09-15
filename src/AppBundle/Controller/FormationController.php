<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FormationController extends Controller
{
    public function ViewAction()
    {
        return $this->render('AppBundle:Formation:formation.html.twig', array(
            // ...
        ));
    }

}
