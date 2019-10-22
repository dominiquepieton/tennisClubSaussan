<?php

namespace App\Controller;

use App\Entity\Contact;
use App\service\Pagination;
use App\Form\AdminContactType;
use App\Repository\ContactRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminContactController extends AbstractController
{
    /**
     * Permet la récupartion de tous les messages envoyés
     * 
     * 
     * @Route("/admin/contact/{page<\d+>?1}", name="admin_contact_index")
     */
    public function index(ContactRepository $repo, $page, Pagination $pagination)
    {
        $pagination->setEntityClass(Contact::class)
                   ->setPage($page);

        return $this->render('admin/contact/index.html.twig', [
            'contact' => $pagination->getData(),
            'pages'   => $pagination->getPages(),
            'page'    => $page
        ]);
    }

    /**
     * Permet la création d'un message contact
     * 
     * @Route("/contact/new", name="contact_create")
     * @return Response
     */
    public function create (Request $request, ObjectManager $manager) {
        $contact = new Contact();

        // creation du formulaire on lui passe l'article
        $form = $this->createForm(AdminContactType::class, $contact);

        // recuperation des données grace à form en utilisant handleRequest
        $form->handleRequest($request);

        // on verifie si le formulaire a étè sousmit et si il est valide
        if ($form->isSubmitted() && $form->isValid()){

            $manager->persist($contact); // persiste dans le temps
            $manager->flush();   // envoies la requête à la db
            
             //message pour prevenir que cela c'est bien passé       
            $this->addFlash(
                'success',
                "<strong>{$contact->getlastname()}</strong>, le message a bien étè envoyée."
            );
            
            // gérer la redirection la redirection 
            return $this->redirectToRoute('contact_create');
        }

        return $this->render('contact/new.html.twig', [
            'form' => $form->createView()    // permet de faire passer a twig un plus petit objet
            ]);
    }

    /**
     * permet de voir un message contact
     * 
     * @Route("/admin/contact/{id}", name="admin_contact_show")
     * 
     * @return Response
     */
    public function show($id, ContactRepository $repo){
        $contacts = $repo->findOneById($id);
        return $this->render('contact/show.html.twig', [
            'id' =>$contacts->getId()
        ]);
    }

    /**
     * Permet d'afficher le message pour le réediter
     * 
     * @Route("/edit/{id}", name="contact_edit")
     * 
     * @return Response
     */
    public function edit(Contact $contact, Request $request, ObjectManager $manager){
        // creation du formulaire 
       $form = $this->createForm(AdminContactType::class, $contact);

        // recuperation des données grace à form en utilisant handleRequest
       $form->handleRequest($request);

       if ($form->isSubmitted() && $form->isValid()){

           $manager->persist($contact); // persiste dans le temps
           $manager->flush();   // envoies la requête à la db
           
           // message pour prevenir que cela c'est bien passé       
           $this->addFlash(
               'success',
               "<strong>{$contact->getlastname()}</strong>Les modifications du message ont bien étè enregistrée."
           );
           
           // gérer la redirection la redirection 
           return $this->redirectToRoute('homepage');
       }
   
       return $this->render('contact/edit.html.twig', [
           'form' =>$form->createView()
       ]);

   }

   /**
     * Permet de supprimer un message
     * 
     * @Route("admin/contact/delete/{id}", name="admin_contact_delete")
     * 
     * @param Contact $contact
     * @param ObjectManager $manager
     * @return Response
     */
    public function delete(Contact $contact, ObjectManager $manager) {
        // demande au manager de supprimer la pré-inscription
        $manager->remove($contact);
        $manager->flush();

        //message flash
        $this->addFlash(
            'success',
            "Le message a bien été supprimée !"
        );

        // fait une redirection aprés avoir supprimer
        return $this->redirectToRoute("admin_contact_index");

    }




}
