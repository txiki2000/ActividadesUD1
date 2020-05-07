<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CalculosController extends AbstractController
{
    public function sumar($num1, $num2)
    {
        $suma = $num1 + $num2;
        return $this->render('calculos/sumar.html.twig', [
            'suma' => $suma,
            'num1' => $num1,
            'num2' => $num2
        ]);
    }
    public function restar($num1, $num2)
    {
        $resta = $num1 - $num2;
        return $this->render('calculos/restar.html.twig', [
            'resta' => $resta,
            'num1' => $num1,
            'num2' => $num2
        ]);
    }
}
