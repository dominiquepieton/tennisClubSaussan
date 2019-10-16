<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AdminAccountController extends Controller
{
    /**
     * @Route("/admin/login", name="admin_account_login")
     */
    public function login(AuthenticationUtils $util)
    {
         //gestion des erreurs d'authentification
         $error = $util->getLastAuthenticationError();

         //Permet de récupérer le dernier email taper
         $username = $util->getLastUsername();
        
        return $this->render('admin/account/login.html.twig', [
            
            'hasError' => $error !== null,  // vérification si error est null ou pas
            'username' => $username         // passage de la variable 
        ]);
    }

    /**
     * Permet de se déconnecter
     * 
     * @Route("/admin/logout", name="admin_account_logout")
     * 
     * @return void
     */
    public function logout()
    {
        // rien 
    }
}
