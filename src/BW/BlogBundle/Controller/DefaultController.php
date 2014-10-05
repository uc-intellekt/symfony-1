<?php

namespace BW\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name, $surname)
    {
//        return $this->render('BWBlogBundle:Default:index.html.twig', array(
//            'name' => $name,
//            'surname' => $surname,
//        ));
        $response =  new Response($this->renderView('BWBlogBundle:Default:index.html.twig', array(
            'name' => 'Name',
            'surname' => 'Surname',
        )), 500);
        return $response;
    }
    
    public function redirectAction()
    {
        return $this->redirect($this->generateUrl('bw_blog_homepage', array(
            'name' => 'Name',
            'surname' => 'Surname',
        )));
    }
}
