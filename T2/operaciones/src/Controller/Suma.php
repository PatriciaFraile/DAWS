<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Suma extends AbstractController
{
    /**
     * @Route("/path")
     */
    public function operacion($n1,$n2)
    {
        $calculo = $n1+$n2;
        

        return $this->render('suma.html.twig',[
            'calculo'=> $calculo,
             'n1'=> $n1,
             'n2'=> $n2    
        ]);
       
    }
}



?>