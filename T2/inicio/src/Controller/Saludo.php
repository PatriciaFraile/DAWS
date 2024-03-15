<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
class Saludo{
    public function hola(){
        return new Response('<h1>Hola</h1>');
    }

}
?>