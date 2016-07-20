<?php

namespace LG\MagazineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
//        $name = "momo";
//        
//        return array('name' => $name);
//        $this->$name = "momo";
        return $this->render('LGMagazineBundle:Default:index.html.twig');
    }
}
