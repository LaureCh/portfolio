<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ArticleBundle\Entity\Article;
use Symfony\Component\HttpFoundation\Request;


class NavbarController extends Controller
{
    public function NavAction()
    {
      $em = $this->getDoctrine()->getManager();

      $articles = $em->getRepository('ArticleBundle:Article')->findAll();
       // die($articles);
      return $this->render('AppBundle:Navbar:nav.html.twig', array(
          'articles' => $articles,
      ));

    }

}
