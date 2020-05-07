<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NoticiasController extends AbstractController
{
    // /**
    //  * @Route("/noticias", name="noticias")
    //  */
    public function index($categoria, $provincia)
    {
        return $this->render('noticias/index.html.twig', [
            'categoria' => $categoria,
            'provincia' => $provincia,
        ]);
    }
}
