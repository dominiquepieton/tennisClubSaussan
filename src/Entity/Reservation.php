<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert; // validation du formulaire si pas vide

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReservationRepository")
 * @UniqueEntity(
 *      fields={"jour","semaine","heureDebut","heureFin","terrain"},
 *      message = "Une reservation est déjà enregistrée dans les creneaux que vous avez selectionné."
 * )
 */
class Reservation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\LessThan(value = 31,message="la date est trop grande pas possible")
     * @Assert\GreaterThan(value = 0, message ="la date est trop petit")
     */
    private $jour;

    /**
     * @ORM\Column(type="integer")
     * 
     * @Assert\LessThan(value = 23,message="l'heure est trop grande pas possible")
     * @Assert\GreaterThan(value = 7, message ="l'heure est trop petit")
     * 
     */
    private $heureDebut;

    /**
     * 
     * @ORM\Column(type="integer")
     * 
     * @Assert\LessThan(value = 23,message="l'heure est trop grande pas possible")
     * @Assert\GreaterThan(value = 7, message ="l'heure est trop petit")
     *
     */
    private $heureFin;

    /**
     * @ORM\Column(type="integer")
     * 
     * @Assert\LessThan(value = 53,message="il n'y a que 52 semaines, pas possible")
     * @Assert\GreaterThan(value = 0, message ="les semaine ne peut pas être négatif")
     * 
     */
    private $semaine;

    /**
     * @ORM\Column(type="integer")
     * 
     * @Assert\LessThan(value = 4,message="la numero numero de terrain est trop grand pas possible")
     * @Assert\GreaterThan(value = 0, message ="le nunmero de terrain est trop petit")
     * 
     */
    private $terrain;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Adherent", inversedBy="reservations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $reserve;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getJour(): ?string
    {
        return $this->jour;
    }

    public function setJour(string $jour): self
    {
        $this->jour = $jour;

        return $this;
    }

    public function getHeureDebut(): ?int
    {
        return $this->heureDebut;
    }

    public function setHeureDebut(int $heureDebut): self
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    public function getHeureFin(): ?int
    {
        return $this->heureFin;
    }

    public function setHeureFin(int $heureFin): self
    {
        $this->heureFin = $heureFin;

        return $this;
    }

    public function getSemaine(): ?int
    {
        return $this->semaine;
    }

    public function setSemaine(int $semaine): self
    {
        $this->semaine = $semaine;

        return $this;
    }

    public function getTerrain(): ?int
    {
        return $this->terrain;
    }

    public function setTerrain(int $terrain): self
    {
        $this->terrain = $terrain;

        return $this;
    }

    public function getReserve(): ?Adherent
    {
        return $this->reserve;
    }

    public function setReserve(?Adherent $reserve): self
    {
        $this->reserve = $reserve;

        return $this;
    }
}
