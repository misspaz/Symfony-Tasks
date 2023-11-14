<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Tareas extends AbstractController
{

    #[Route("/tareas")]
    public function getTarea()
    {
        $tareas = [
            [
                "nombre" => "Limpiar la casa",
                "descripción" => "Recoger cuarto y cambiar sábanas",
                "estado" => "hecha",
                "id" => 0
            ],
            [
                "nombre" => "Hacer la compra",
                "descripción" => "Comprar pan y fruta",
                "estado" => "",
                "id" => 1

            ],
            [
                "nombre" => "Hacer ejercicio",
                "descripción" => "Ejercitar tren superior",
                "estado" => "",
                "id" => 2

            ]
        ];
        return $this->render("Tareas/showTarea.html.twig", ["tareas" => $tareas]);
    }
}
