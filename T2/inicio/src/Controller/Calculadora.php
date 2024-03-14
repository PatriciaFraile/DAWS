<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class Calculadora{
    public function operar(){
        return new Response("Esto es una calculadora");
    }
}
?>