<?php

namespace App\Controller;

use App\MyPractices\Domain\MyService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyServiceController extends AbstractController
{
    /**
     * @Route("/my/service", name="app_my_service")
     */
    public function index(MyService $service): Response
    {
        $test = $service->getTest();
        $booking = $service->getBookingRepo()->find(2);

        return $this->render('my_service/index.html.twig', [
            'controller_name' => 'MyServiceController',
            'test' => $test,
            'booking' => $booking
        ]);
    }
}
