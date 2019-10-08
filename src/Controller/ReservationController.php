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
     * @return Response
     */
    public function create(Request $request, ObjectManager $manager) {
        //creation d'une nouvelle reservation
        $reservation = new Reservation();

        // creation du formulaire on lui passe la nouvelle reservation
        $form = $this->createForm(ReservationType::class, $reservation);

        // recupertion des données grace à form en utilisant handleRequest
        $form->handleRequest($request);

        // on verifie si le formulaire a étè sousmit et si il est valide
        if ($form->isSubmitted() && $form->isValid()){

            $manager->persist($reservation); // persiste dans le temps
            $manager->flush();   // envoies la requête à la db

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

}
