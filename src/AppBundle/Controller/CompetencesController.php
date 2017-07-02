<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CompetencesController extends Controller
{
    public function ViewAction()
    {
        return $this->render('AppBundle:Competences:competences.html.twig', array(
        ));
    }

}
