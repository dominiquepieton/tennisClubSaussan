<?php

namespace App\Controller;

use App\Entity\Adherent;
use App\Form\AccountType;
use App\Entity\PasswordUpdate;
use App\Form\RegistrationType;
use App\Form\PasswordUpdateType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AccountController extends AbstractController
{
    /**
     * Permet d'afficher et de gérer le formulaire de connexion
     * 
     * @Route("/login", name="account_login")
     * 
     * @return Response
     */
    public function login(AuthenticationUtils $utils)
    {
        //gestion des erreurs d'authentification
        $error = $utils->getLastAuthenticationError();

        //Permet de récupérer le dernier email taper
        $username = $utils->getLastUsername();

        return $this->render('account/login.html.twig', [
            'hasError' => $error !== null,  // vérification si error est null ou pas
            'username' => $username         // passage de la variable 
        ]);
    }

    /**
     * Permet de se déconnecter
     * 
     * @Route("/logout", name="account_logout")
     * 
     * @return void
     */
    public function logout()
    {
        // rien 
    }

    /**
     * Permet d'afficher le registre d'inscription
     * 
     * @Route("/register", name="account_register")
     * @IsGranted("ROLE_ADMIN")
     * 
     * @return Response
     */
    public function register(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder)
    {
        $adherent = new Adherent();  // création d'un nouveau adhérent
        $form = $this->createForm(RegistrationType::class, $adherent); //création du formulaire
        $form->handleRequest($request); // gestion de la requête 

        if($form->isSubmitted() && $form->isValid()) {
            
            $hash = $encoder->encodePassword($adherent, $adherent->getHash()); // on encode le password
            $adherent->setHash($hash);  // on repasse le password encodé dans setHash
            
            $manager->persist($adherent);   //traitement de la requête
            $manager->flush();

            //message flash d'erreur ou de réussite
            $this->addFlash(
                'success',
                "L'inscription est réussit......"    
            );

            return $this->redirectToRoute('account_login');

        }

        return $this->render('account/registration.html.twig',[
            'form' => $form->createView()
        ]);
    }

    /**
     * Permet d'afficher et modifier son profile
     * 
     * @Route("/account/profile", name="account_profile")
     * @IsGranted("ROLE_USER")
     * 
     * @return Response
     */
    public function profile(Request $request, ObjectManager $manager) {
        //creation du formulaire modification
        $adherent = $this->getUser();
        $form = $this->createForm(AccountType::class, $adherent);

        //gestion de la requete
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $manager->persist($adherent);
            $manager->flush();

            //message success
            $this->addFlash(
                'success',
                "Les modifications ont bien été enregistrée"
            );
        }

        // affichage formulaire
        return $this->render('account/profile.html.twig', [
            'form' => $form->createView()
        ]);

    }
    
    /**
     * Permet la modification du mot de passe
     * 
     * @Route("/account/password-update", name="account_password")
     * IsGranted("ROLE_USER")
     * 
     * @return Response
     */
    public function updatePassword(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder) {
        // Création de nouveau password
        $passwordUpdate = new PasswordUpdate();

        // appel le l'adhérent connecter
        $user = $this->getUser();

        // Création du formulaire
        $form = $this->createForm(PasswordUpdateType::class, $passwordUpdate);

        // updater le mot passe dans la bd
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){

            // vérifiacation du password tapez et différent du password user
            if(!password_verify($passwordUpdate->getOldPassword(), $user->getHash())){
                // gestion de l'erreur dans le champ :grace get(nomduchamp)->addError(new formeerror(est le message ))
                $form->get('oldPassword')->addError(new FormError("Erreur dans le mot de passe que vous avez entrez!!")); 
            } else {
                // gestion de recupération du nouveau password
                $newPassword = $passwordUpdate->getNewPassword();
                // encodage du password
                $hash = $encoder->encodePassword($user, $newPassword);
                // setter le nouveau password
                $user->setHash($hash);

                $manager->persist($user);
                $manager->flush();

                //message success
                $this->addFlash(
                    'success',
                    "Le nouveau password a bien été enregistré..."
            );
                // redirection aprés validation
                return $this->redirectToRoute('account_profile');
            }    
        }
            // passage de form à twig pour l'afficher
        return $this->render('account/password.html.twig', [
            'form' => $form->createView()
        ]);
    }

}