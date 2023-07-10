<?php

namespace App\MyPractices\Domain;

use App\Repository\BookingRepository;

class MyService
{
    /**
     * @var BookingRepoInterface
     */
    private $bookingRepo;

    /**
     * @param BookingRepoInterface $bookingRepo
     */
    public function __construct(BookingRepoInterface $bookingRepo)
    {
        $this->bookingRepo = $bookingRepo;
    }

    public function getTest(): string
    {
        return 'test my service';
    }

    /**
     * @return BookingRepoInterface
     */
    public function getBookingRepo(): BookingRepoInterface
    {
        return $this->bookingRepo;
    }
}