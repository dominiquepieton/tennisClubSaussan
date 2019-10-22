<?php

namespace App\Controller;

use App\Entity\Adherent;
use App\service\Pagination;
use App\Repository\AdherentRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminAdherentController extends Controller
{
    /**
     * Permet d'afficher les adhérents du club
     * 
     * @Route("/admin/adherents/{page<\d+>?1}", name="admin_adherent_index")
     */
    public function index(AdherentRepository $repo, $page, Pagination $pagination)
    {
        $pagination->setEntityClass(Adherent::class)
                   ->setPage($page);

        return $this->render('admin/adherent/index.html.twig', [
            'adherent' => $pagination->getData(),
            'pages' => $pagination->getPages(),
            'page'  => $page
        ]);
    }

    /**
     * Permet de supprimer un adherent
     * 
     * @Route("/admin/adherent/{id}/delete", name="admin_adherent_delete")
     * 
     * @param Adherent $adherents
     * @param ObjectManager $manager
     * @return Response
     */
    public function delete(Adherent $adherents, ObjectManager $manager) {
        // demande au manager de supprimer la réservation
        $manager->remove($adherents);
        $manager->flush();

        //message flash
        $this->addFlash(
            'success',
            "L'adherent a bien été supprimée !"
        );

        // fait une redirection aprés avoir supprimer
        return $this->redirectToRoute("admin_adherent_index");

    }
}