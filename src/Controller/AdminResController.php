<?php

namespace App\Controller;


use App\Repository\ReservationRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminResController extends Controller
{
    /**
     * @Route("/admin/res", name="admin_res_index")
     */
    public function index(ReservationRepository $repo)
    {
        return $this->render('admin/res/index.html.twig', [
            'res' => $repo->findAll()
        ]);
    }

}
