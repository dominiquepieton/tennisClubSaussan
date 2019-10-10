<?php

namespace App\Controller;

use App\Entity\Adherent;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    /**
     * @Route("/user/{firstName}", name="user_show")
     */
    public function index(Adherent $adherent)
    {
        return $this->render('user/index.html.twig', [
            'adherent' => $adherent
        ]);
    }
}
