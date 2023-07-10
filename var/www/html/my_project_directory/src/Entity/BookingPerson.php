<?php

namespace App\Entity;

use App\Repository\BookingPersonRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table("booking_person")
 * @ORM\Entity(repositoryClass=BookingPersonRepository::class)
 */
class BookingPerson
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
     * @ORM\Column(type="integer")
     */
    private $age;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Booking", inversedBy="persons", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="booking_id", referencedColumnName="id")
     */
    private $booking;

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

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBooking()
    {
        return $this->booking;
    }

    /**
     * @param mixed $booking
     */
    public function setBooking($booking): void
    {
        $this->booking = $booking;
    }
}
