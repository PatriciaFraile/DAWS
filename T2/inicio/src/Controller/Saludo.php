<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class Saludo
{
    /**
     * @Route("/path")
     */
    public function hola()
    {
       return new Response('<h1>Hola</h1>');
    }
}