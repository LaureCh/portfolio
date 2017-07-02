<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function ViewAction()
    {
        return $this->render('AppBundle:Contact:contact.html.twig', array(
            // ...
        ));
    }

}
