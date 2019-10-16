<?php

namespace App\Controller;

use App\Entity\ResgistrationStage;
use App\Form\AdminRegistrationStageType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ResgistrationStageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminRegistrationStageController extends AbstractController
{
    /**
     * Permet de voir toutes les inscription au stage
     * 
     * @Route("/admin/stage", name="admin_stage_index")
     */
    public function index(ResgistrationStageRepository $repo)
    {
        return $this->render('admin/stage/index.html.twig', [
            'registrationStage' =>$repo->findAll()
        ]);
    }

    /**
     * Permet la création d'enregistrer l'adhérent au stage
     * 
     * @Route("/admin/stage/new", name="admin_stage_create")
     * @return Response
     */
    public function create (Request $request, ObjectManager $manager) {
        $registrationStage = new ResgistrationStage();

        // creation du formulaire on lui passe l'inscription
        $form = $this->createForm(AdminRegistrationStageType::class, $registrationStage);

        // recuperation des données grace à form en utilisant handleRequest
        $form->handleRequest($request);

        // on verifie si le formulaire a étè sousmit et si il est valide
        if ($form->isSubmitted() && $form->isValid()){

            $manager->persist($registrationStage); // persiste dans le temps
            $manager->flush();   // envoies la requête à la db
            
             //message pour prevenir que cela c'est bien passé       
            $this->addFlash(
                'success',
                "L'inscription au stage de <strong>{$registrationStage->getlastname()}</strong> a bien étè enregistrée."
            );
            
            // gérer la redirection la redirection 
            return $this->redirectToRoute('admin_stage_show', [
                'id' =>$registrationStage->getId()
            ]);
        }

        return $this->render('admin/stage/new.html.twig', [
            'form' => $form->createView()    // permet de faire passer a twig un plus petit objet
            ]);
    }

    /**
     * permet de voir une inscription au stage 
     * 
     * @Route("/admin/stage/{id}", name="admin_stage_show")
     * 
     * @return Response
     */
    public function show($id, ResgistrationStageRepository $repo){
        $registrationStage = $repo->findOneById($id);
        return $this->render('admin/stage/show.html.twig', [
            'registrationStage' => $registrationStage
        ]);
    }

    /**
     * Permet d'afficher le formulaire d'édition
     * 
     * @Route("/admin/stage/edit/{id}", name="admin_stage_edit")
     * 
     * @return Response
     */
    public function edit(ResgistrationStage $registrationStage, Request $request, ObjectManager $manager){
        // creation du formulaire 
       $form = $this->createForm(AdminRegistrationStageType::class, $registrationStage);

        // recuperation des données grace à form en utilisant handleRequest
       $form->handleRequest($request);

       if ($form->isSubmitted() && $form->isValid()){

           $manager->persist($registrationStage); // persiste dans le temps
           $manager->flush();   // envoies la requête à la db
           
           // message pour prevenir que cela c'est bien passé       
           $this->addFlash(
               'success',
               "Les modifications de l'inscription au stage de <strong>{$registrationStage->getlastname()}</strong> ont bien étè enregistrée."
           );
           
           // gérer la redirection la redirection 
           return $this->redirectToRoute('admin_stage_show', [
               'id' =>$registrationStage->getId()
           ]);
       }
   
       return $this->render('admin/stage/edit.html.twig', [
           'form' =>$form->createView()
       ]);
   }

   /**
     * Permet de supprimer une pré-inscription
     * 
     * @Route("/reservation/delete/{id}", name="admin_stage_delete")
     * 
     * @param ResgistrationStage $preRegistration
     * @param ObjectManager $manager
     * @return Response
     */
    public function delete(ResgistrationStage $registrationStage, ObjectManager $manager) {
        // demande au manager de supprimer la pré-inscription
        $manager->remove($registrationStage);
        $manager->flush();

        //message flash
        $this->addFlash(
            'success',
            "La réservation a bien été supprimée !"
        );

        // fait une redirection aprés avoir supprimer
        return $this->redirectToRoute("admin_stage_index");

    }
}
