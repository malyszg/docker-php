<?php

namespace App\Entity;

use App\Repository\BookingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table("booking")
 * @ORM\Entity(repositoryClass=BookingRepository::class)
 */
class Booking
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $hotel;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\BookingPerson", mappedBy="booking", cascade={"persist", "remove"})
     */
    private $persons = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getHotel(): ?string
    {
        return $this->hotel;
    }

    public function setHotel(string $hotel): self
    {
        $this->hotel = $hotel;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPersons()
    {
        return $this->persons;
    }

    /**
     * @param mixed $persons
     */
    public function setPersons($persons): void
    {
        $this->persons = $persons;
    }

    public function addPerson(BookingPerson $person)
    {
        $person->setBooking($this);
        $this->persons[] = $person;
    }
}
