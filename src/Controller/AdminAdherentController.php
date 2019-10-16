<?php

namespace App\Controller;

use App\Repository\AdherentRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminAdherentController extends Controller
{
    /**
     * Permet d'afficher les adhérents du club
     * 
     * @Route("/admin/adherents", name="admin_adherent_index")
     */
    public function index(AdherentRepository $repo)
    {
        return $this->render('admin/adherent/index.html.twig', [
            'adherent' =>$repo->findAll()
        ]);
    }
}