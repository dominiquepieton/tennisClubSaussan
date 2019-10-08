<?php

namespace App\Controller;  // lieu de travail 

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

        /**
         * @Route("/", name="homepage")
         */
        public function home() {
             return $this->render(      // Prend 2 paramêtres lien twig,un tableau associatif qui contient les variables
                'home.html.twig',
                [ 'title' => "Tennis Club Saussan" ]
             );   
        }


}





?>