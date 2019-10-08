<?php

namespace App\DataFixtures;

use App\Entity\Reservation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1;$i <= 30;$i++){
            $reservation = new Reservation(); // creation de fausse reservation 

            $reservation->setNom("pieton")
                        ->setJour(mt_rand(1, 31))
                        ->setHeureDebut(mt_rand(8,22))
                        ->setHeureFin(mt_rand(8, 22))
                        ->setSemaine(mt_rand(1, 52))
                        ->setTerrain(mt_rand(1, 3));

            $manager->persist($reservation);
        }
        $manager->flush();
    }
}
