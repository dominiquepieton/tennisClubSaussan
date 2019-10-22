<?php

namespace App\Controller;


use App\Entity\Reservation;
use App\service\Pagination;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminResController extends AbstractController
{
    /**
     * @Route("/admin/res/{page<\d+>?1}", name="admin_res_index")
     */
    public function index(ReservationRepository $repo, $page, Pagination $pagination)
    {
      /* 
        //valeur total de donnée
        $total = count($repo->findAll());
        // indique que le nbre de pages au nbre superieur avec ceil
        $pages = ceil($total / $limit);*/

        $pagination->setEntityClass(Reservation::class)
                   ->setPage($page);

        return $this->render('admin/res/index.html.twig', [
            'res' => $pagination->getData(),
            'pages' => $pagination->getPages(), // nbre de page totale 
            'page' => $page                    //page de démarrage
        ]);
    }


    /**
     * Permet d'afficher le formulaire d'édition
     * 
     * @Route("/admin/res/{id}/edit", name="admin_res_edit")
     * 
     * 
     * 
     * @return Response
     */
    public function edit(Reservation $reservation, Request $request, ObjectManager $manager){
        // creation du formulaire on lui passe la nouvelle reservation
       $form = $this->createForm(ReservationType::class, $reservation);

        // recuperation des données grace à form en utilisant handleRequest
       $form->handleRequest($request);

       if ($form->isSubmitted() && $form->isValid()){

           $manager->persist($reservation); // persiste dans le temps
           $manager->flush();   // envoies la requête à la db
           
           // message pour prevenir que cela c'est bien passé       
           $this->addFlash(
               'success',
               "<strong>{$reservation->getNom()}</strong> : Les modifications de votre réservation ont bien étè enregistrée."
           );
           
           // gérer la redirection la redirection 
           return $this->redirectToRoute('admin_res_index', [
            'id' =>$reservation->getId()
           ]
           );
       }
   
       return $this->render('reservation/edit.html.twig', [
           'form' =>$form->createView()
       ]);
   }

   /**
     * Permet de supprimer la reservation
     * 
     * @Route("/admin/res/{id}/delete", name="admin_res_delete")
     * 
     * 
     * @param Reservation $reservation
     * @param ObjectManager $manager
     * @return Response
     */
    public function delete(Reservation $reservation, ObjectManager $manager) {
        // demande au manager de supprimer la réservation
        $manager->remove($reservation);
        $manager->flush();

        //message flash
        $this->addFlash(
            'success',
            "La réservation a bien été supprimée !"
        );

        // fait une redirection aprés avoir supprimer
        return $this->redirectToRoute("admin_res_index");

    }

}
