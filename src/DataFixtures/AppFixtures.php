<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Adherent;
use App\Entity\Reservation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder){
        $this->encoder = $encoder;
    }
    
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr-FR');
        //creation d'ahdérents
        $adherents = []; // array pour rentrer les adherents

        for($i = 1;$i <= 10; $i++) {
            $adherent = new Adherent();
            
            $hash = $this->encoder->encodePassword($adherent, 'password');

            $adherent->setFirstName($faker->firstname)
                     ->setLastName($faker->lastname)
                     ->setEmail($faker->email)
                     ->setHash($hash);

            $manager->persist($adherent);
            $adherents[] = $adherent;
            
        }

        //creation des reservations
        for($i = 1;$i <= 30;$i++){
            $reservation = new Reservation(); // creation de fausse reservation 

            $adherent = $adherents[mt_rand(0,count($adherents) - 1)];

            $reservation->setNom($faker->firstname)
                        ->setJour(mt_rand(1, 31))
                        ->setHeureDebut(mt_rand(8,22))
                        ->setHeureFin(mt_rand(8, 22))
                        ->setSemaine(mt_rand(1, 52))
                        ->setTerrain(mt_rand(1, 3))
                        ->setReserve($adherent);

            $manager->persist($reservation);
        }
        $manager->flush();
    }
}
