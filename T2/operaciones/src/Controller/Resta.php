<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class Resta extends AbstractController{
    public function operacion($n1,$n2){
        $calculo = $n1-$n2;

        return $this->render('resta.html.twig',[
            'calculo'=> $calculo,
            'n1'=>$n1,
            'n2'=>$n2
            
        ]);
    }
    
}


?>