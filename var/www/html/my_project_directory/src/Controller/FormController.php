<?php

namespace App\Controller;

use App\Entity\Booking;
use App\Entity\BookingPerson;
use App\Form\BookingType;
use App\Form\LocationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends AbstractController
{
    /**
     * @Route("/my/form", name="app_form")
     */
    public function index(Request $request): Response
    {
        $form = $this->createForm(LocationType::class, [], ['method' => "post"]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $this->addFlash(
                'success',
                'Your changes were saved with poscode ' . $data["postcode"]
            );
        }

        return $this->render('form/index.html.twig', [
            'controller_name' => 'FormController',
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/my/form_collection", name="app_form_collection")
     */
    public function formCollection(Request $request, EntityManagerInterface $em): Response
    {
        /*
        $b = new Booking();
        $b->setName('Grzegorz Tesmer');
        $b->setHotel('Alladdin');

        $p1 = new BookingPerson();
        $p1->setName('Grzegorz Tesmer');
        $p1->setAge(40);

        $b->addPerson($p1);

        $em->persist($b);
        $em->flush();
        */

        $b = new Booking();
        $p1 = new BookingPerson();
        $b->addPerson($p1);

        $form = $this->createForm(BookingType::class, $b);

        return $this->render('form/collection.html.twig', [
            'controller_name' => 'FormController',
            'form' => $form->createView()
        ]);
    }
}
