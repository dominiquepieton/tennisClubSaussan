<?php

namespace App\Controller;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminDashboardController extends AbstractController
{
    /**
     * @Route("/admin", name="admin_dashboard")
     */
    public function index(ObjectManager $manager)
    {
        // requete dql pour avoir des information à partir de mon entity single scalar recupere le nombre seul
        $adherent = $manager->createQuery('SELECT COUNT(a) FROM App\Entity\Adherent a')->getSingleScalarResult();
        $reservation = $manager->createQuery('SELECT COUNT(b) FROM App\Entity\Reservation b')->getSingleScalarResult();
        $contact = $manager->createQuery('SELECT COUNT(c) FROM App\Entity\Contact c')->getSingleScalarResult();
        $article = $manager->createQuery('SELECT COUNT(d) FROM App\Entity\Article d')->getSingleScalarResult();
        $registration = $manager->createQuery('SELECT COUNT(e) FROM App\Entity\PreRegistration e')->getSingleScalarResult();
        $stage = $manager->createQuery('SELECT COUNT(f) FROM App\Entity\ResgistrationStage f')->getSingleScalarResult();
        
        return $this->render('admin/dashboard/index.html.twig', [
            //On met les valeurs des variables dans un tableau grace à la function compact qui permet de mettre plusieur clé en meme temps
            'stats' => compact('adherent', 'reservation', 'contact', 'article', 'registration', 'stage')
        ]);
    }
}
