<?php

namespace App\Entity;

use DateTimeInterface;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert; // validation du formulaire si pas vide

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReservationRepository")
 * @UniqueEntity(
 *      fields={"jour","heureDebut","heureFin","terrain"},
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
     * @ORM\Column(type="date")
     *@Assert\GreaterThan("today",message="Vous ne pouvez pas réserver un terrain pour le passé......")
     */
    private $jour;

    /**
     * @ORM\Column(type="integer")
     * 
     * @Assert\LessThan(propertyPath="heureFin", message ="l'heure ne peut pas être plus grande que l'heure de fin")
     * 
     */
    private $heureDebut;

    /**
     * 
     * @ORM\Column(type="integer")
     * 
     * @Assert\GreaterThan(propertyPath="heureDebut",message="l'heure ne peut pas être plus petite que l'heure de debut")
     * 
     *
     */
    private $heureFin;

    
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

    public function getJour(): ?\DateTimeInterface
    {
        return $this->jour;
    }

    public function setJour(\DateTimeInterface $jour): self
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
