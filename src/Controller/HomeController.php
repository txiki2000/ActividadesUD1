<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
 //   /**
 //    * @Route("/home", name="home")
 //    */
    public function index()
    {
        return $this->render('home/index.html.twig');
    }
 //   /**
 //    * @Route("/deportes", name="deportes")
 //    */
    public function deportes()
    {
        return $this->render('home/deportes.html.twig');
    }
    // /**
    //  * @Route("/cine", name="cine")
    //  */
    public function cine()
    {
        return $this->render('home/cine.html.twig');
    }
    // /**
    //  * @Route("/viajes", name="viajes")
    //  */
    public function viajes()
    {
        return $this->render('home/viajes.html.twig');
    }

}

