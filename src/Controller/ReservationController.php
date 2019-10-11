<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReservationController extends AbstractController
{
    /**
     * @Route("/reservation", name="reservation")
     */
    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(Reservation::class); // avoir toute la class resevation
        
        $reservations = $repo->findAll(); // tous ce qui trouve dans la base de donnée

        return $this->render('reservation/index.html.twig', [
            'reservations' => $reservations // équivaut à controller_name' => 'ReservationController',
        ]);

    }

    /**
     * Permet de créer une réservation de terrain
     * 
     * @Route("/reservation/new", name="reservation_create")
     * @IsGranted("ROLE_USER")
     * 
     * @return Response
     */
    public function create(Request $request, ObjectManager $manager) {
        //creation d'une nouvelle reservation
        $reservation = new Reservation();

        // creation du formulaire on lui passe la nouvelle reservation
        $form = $this->createForm(ReservationType::class, $reservation);

        // recuperation des données grace à form en utilisant handleRequest
        $form->handleRequest($request);

        // on verifie si le formulaire a étè sousmit et si il est valide
        if ($form->isSubmitted() && $form->isValid()){

            // on indique a qui appartient la reservation
            $reservation->setReserve($this->getUser());


            $manager->persist($reservation); // persiste dans le temps
            $manager->flush();   // envoies la requête à la db
            


            // message pour prevenir que cela c'est bien passé       
            $this->addFlash(
                'success',
                "<strong>{$reservation->getNom()}</strong> : votre réservation a bien étè enregistrée."
            );
            
            // gérer la redirection la redirection 
            return $this->redirectToRoute('reservation_show', [
                'id' =>$reservation->getId()
            ]);
        }

        return $this->render('reservation/new.html.twig', [
            'form' => $form->createView()    // permet de faire passer a twig un plus petit objet
        ]);
    }
    
    
    /**
     * Permet d'afficher le formulaire d'édition
     * 
     * @Route("/reservation/{id}/edit", name="reservation_edit")
     * 
     * @Security("is_granted('ROLE_USER') and user === reservation.getReserve()", message="Cette réservation n'est pas la vôtre,Choisissez une révervation qui vous appartient.....")
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
            return $this->redirectToRoute('reservation_show', [
                'id' =>$reservation->getId()
            ]);
        }
    
        return $this->render('reservation/edit.html.twig', [
            'form' =>$form->createView()
        ]);
    }


    /**
     * permet de voir une annonce 
     * 
     * @Route("/reservation/{id}", name="reservation_show")
     * 
     * @return Response
     */
    public function show(Reservation $reservation){
        return $this->render('reservation/show.html.twig', [
            'reservation' => $reservation
        ]);
    }


    /**
     * Permet de supprimer la reservation
     * 
     * @Route("/reservation/{id}/delete", name="reservation_delete")
     * @Security("is_granted('ROLE_USER') and user == reservation.getReserve()", message="Vous n'avez pas le droit de supprimer cette réservation")
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
        return $this->redirectToRoute("homepage");

    }

}
