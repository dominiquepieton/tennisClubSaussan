<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Entity\PreRegistration;
use App\Form\AdminPreRegistrationType;
use App\Repository\PreRegistrationRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminPreRegistrationController extends AbstractController
{
    /**
     * Permet d'affiche la liste de pré-inscription
     * 
     * @Route("/admin/registration", name="admin_registration_index")
     */
    public function index(PreRegistrationRepository $repo)
    {
        return $this->render('admin/registration/index.html.twig', [
            'preRegistration' => $repo->findAll()
        ]);
    }

    /**
     * Permet la création d'une pré-inscription
     * 
     * @Route("/admin/registration/new", name="admin_registration_create")
     * @return Response
     */
    public function create (Request $request, ObjectManager $manager) {
        $preRegistration = new PreRegistration();

        // creation du formulaire on lui passe l'article
        $form = $this->createForm(AdminPreRegistrationType::class, $preRegistration);

        // recuperation des données grace à form en utilisant handleRequest
        $form->handleRequest($request);

        // on verifie si le formulaire a étè sousmit et si il est valide
        if ($form->isSubmitted() && $form->isValid()){

            // on indique a qui appartient la reservation
            //$article->setReserve($this->getUser());


            $manager->persist($preRegistration); // persiste dans le temps
            $manager->flush();   // envoies la requête à la db
            


             //message pour prevenir que cela c'est bien passé       
            $this->addFlash(
                'success',
                "La pré-inscription de <strong>{$preRegistration->getlastname()}</strong> a bien étè enregistrée."
            );
            
            // gérer la redirection la redirection 
            return $this->redirectToRoute('admin_registration_show', [
                'id' =>$preRegistration->getId()
            ]);
        }

        

        return $this->render('admin/registration/new.html.twig', [
            'form' => $form->createView()    // permet de faire passer a twig un plus petit objet
            ]);
        
    }

    /**
     * permet de voir une pré-inscription
     * 
     * @Route("/admin/registration/{id}", name="admin_registration_show")
     * 
     * @return Response
     */
    public function show($id, PreRegistrationRepository $repo){
        $preRegistration = $repo->findOneById($id);
        return $this->render('admin/registration/show.html.twig', [
            'preRegistration' => $preRegistration
        ]);
    }

    /**
     * Permet d'afficher le formulaire d'édition
     * 
     * @Route("/admin/registration/edit/{id}", name="admin_registration_edit")
     * 
     * @return Response
     */
    public function edit(PreRegistration $preRegistration, Request $request, ObjectManager $manager){
        // creation du formulaire on lui passe la nouvelle preregistration
       $form = $this->createForm(AdminPreRegistrationType::class, $preRegistration);

        // recuperation des données grace à form en utilisant handleRequest
       $form->handleRequest($request);

       if ($form->isSubmitted() && $form->isValid()){

           $manager->persist($preRegistration); // persiste dans le temps
           $manager->flush();   // envoies la requête à la db
           
           // message pour prevenir que cela c'est bien passé       
           $this->addFlash(
               'success',
               "Les modifications de pré-inscription pour <strong>{$preRegistration->getlastname()}</strong> ont bien étè enregistrée."
           );
           
           // gérer la redirection la redirection 
           return $this->redirectToRoute('admin_registration_show', [
               'id' =>$preRegistration->getId()
           ]);
       }
   
       return $this->render('admin/registration/edit.html.twig', [
           'form' =>$form->createView()
       ]);
   }

   /**
     * Permet de supprimer une pré-inscription
     * 
     * @Route("/reservation/delete/{id}", name="admin_registration_delete")
     * 
     * @param PreRegistration $preRegistration
     * @param ObjectManager $manager
     * @return Response
     */
    public function delete(PreRegistration $preRegistration, ObjectManager $manager) {
        // demande au manager de supprimer la pré-inscription
        $manager->remove($preRegistration);
        $manager->flush();

        //message flash
        $this->addFlash(
            'success',
            "La réservation a bien été supprimée !"
        );

        // fait une redirection aprés avoir supprimer
        return $this->redirectToRoute("admin_registration_index");

    }
}
