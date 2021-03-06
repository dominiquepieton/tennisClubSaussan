<?php

namespace App\DataFixtures;

use DateTime;
use Faker\Factory;
use App\Entity\Role;
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
        //creation du role administrateur
        $adminRole = new Role();
        // donne le titre du role
        $adminRole->setTitle('ROLE_ADMIN');
        // dit à manager de persister le adminRole
        $manager->persist($adminRole);
        
        //Creation du nouveau administrateur
        $adminUser = new Adherent();
        // on lui passe le valeur correspondante
        $adminUser->setFirstName('domi')
                  ->setLastName('pieton')
                  ->setEmail('pietondominique70@gmail.com')
                  ->setHash($this->encoder->encodePassword($adminUser, 'oceane1940'))
                  ->setPicture('https://img.icons8.com/color/48/000000/person-male')
                  ->addAdherentRole($adminRole);
                  
        $manager->persist($adminUser);



        //creation d'ahdérents
        $adherents = []; // array pour rentrer les adherents

        for($i = 1;$i <= 30; $i++) {
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
        $faker = Factory::create('fr-FR');
        for($i = 1;$i <= 30;$i++){
            $reservation = new Reservation(); // creation de fausse reservation 

            $adherent = $adherents[mt_rand(0,count($adherents) - 1)];

            $date = $faker->date();

            $dateJour = new DateTime($date);
            $reservation->setNom($faker->firstname)
                        ->setJour($dateJour)
                        ->setHeureDebut(mt_rand(8,22))
                        ->setHeureFin(mt_rand(8, 22))
                        ->setTerrain(mt_rand(1, 3))
                        ->setReserve($adherent);

            $manager->persist($reservation);
        }
        $manager->flush();
    }
}
