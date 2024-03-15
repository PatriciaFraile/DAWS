<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
class Calculadora extends AbstractController{
    public function operar($edad){
        $year = date('Y');
        $calculoEdad = $year-$edad;
        //return new Response('Año de la actual es :' . $year . 'año de nacimiento' .($year-$edad));

        return $this-> render('edad.html.twig',[
            'calculoEdad'=>$calculoEdad

        ]);
    }

}
?>