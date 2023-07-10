<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class EmailController extends AbstractController
{
    /**
     * @Route("/email", name="app_email")
     */
    public function index(MailerInterface $mailer): Response
    {
        $email = (new Email())
            ->from('malyszg@o2.pl')
            ->to('malyszg@o2.pl')
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('To jest wiadomość tekstowa z dockera')
            ->text('to jest wiadomość dla Ciebie do przeczytania')
            ->html('to jest wiadomość dla Ciebie do przeczytania');

        $mailer->send($email);
echo'aasas';die();
        return $this->render('email/index.html.twig', [
            'controller_name' => 'EmailController',
        ]);
    }
}
