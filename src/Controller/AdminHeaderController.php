<?php

namespace App\Controller;

use App\Entity\Contact;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class AdminHeaderController extends AbstractController
{
    
    public function index(){
        //je recupére tous
        $repo = $this->getDoctrine()->getRepository(Contact::class);
        $contact = $repo->findAll();
        
        return $this->render('admin/partials/header.html.twig', [
            'contact' => $contact
        ]);
    }





}



?>