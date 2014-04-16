<?php

namespace luckybambou\Bundle\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('luckybambouBlogBundle:Home:index.html.twig');
    }

    /**
     * @Route("/cv", name="cv")
     */
    public function cvAction()
    {
        $response = $this->render('luckybambouBlogBundle:Home:cv.html.twig');

        $response->setMaxAge(600);
        $response->setSharedMaxAge(360);
        
        return $response;
    }

    public function menuAction()
    {
        $response = $this->render('::menu.html.twig');

        //$response->setMaxAge(600);
        $response->setSharedMaxAge(123);

        return $response;
    }
}
