<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdherentRepository")
 * @UniqueEntity(
 *  fields={"email"},
 *  message="Cette email est déjà utilisé, Veuillez la changer s'il vous plait...." 
 * )
 */
class Adherent implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Veuillez rentrer prénom...")
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Veuillez rentrer votre nom de famille...")
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email(message="Veuillez rentrer un email valide...")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Url(message="veuillez donner une URL valide pour votre avatar...")
     */
    private $picture;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $hash;

    /**
     * Pour confirmer le mot de passe
     * @Assert\EqualTo(propertyPath="hash", message="LE mot de passe ne correspond pas...")
     */
    public $passwordConfirm; // pour permettre de créer le deuxieme champ password

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Reservation", mappedBy="reserve")
     */
    private $reservations;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Role", mappedBy="users")
     */
    private $adherentRoles;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
        $this->adherentRoles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getHash(): ?string
    {
        return $this->hash;
    }

    public function setHash(string $hash): self
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * @return Collection|Reservation[]
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations[] = $reservation;
            $reservation->setReserve($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->contains($reservation)) {
            $this->reservations->removeElement($reservation);
            // set the owning side to null (unless already changed)
            if ($reservation->getReserve() === $this) {
                $reservation->setReserve(null);
            }
        }

        return $this;
    }


    // les fonctions suivantes sont liés à UserInterface

    public function getRoles() {    /* utile pour le role user ou administrator
        * permet de récuperer les titre de role dans une collection grace à map avec un parametre:
        * une fonction (parametre role) et on le remet dans un array apres traitement
        */

        $roles = $this->adherentRoles->map(function($role){
            return $role->getTitle();
        })->toArray();
        
        $roles[] = 'ROLE_USER';

        return $roles;
    }

    public function getPassword() {
        return $this->hash;
    }

    public function getSalt() {}

    public function getUsername() {
        return $this->email;
    }
    
    public function eraseCredentials() {}

    /**
     * @return Collection|Role[]
     */
    public function getAdherentRoles(): Collection
    {
        return $this->adherentRoles;
    }

    public function addAdherentRole(Role $adherentRole): self
    {
        if (!$this->adherentRoles->contains($adherentRole)) {
            $this->adherentRoles[] = $adherentRole;
            $adherentRole->addUser($this);
        }

        return $this;
    }

    public function removeAdherentRole(Role $adherentRole): self
    {
        if ($this->adherentRoles->contains($adherentRole)) {
            $this->adherentRoles->removeElement($adherentRole);
            $adherentRole->removeUser($this);
        }

        return $this;
    }

}
