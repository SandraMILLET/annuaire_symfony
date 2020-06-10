<?php

namespace App\Controller\back;

use App\Entity\Contact;
use App\Form\ContactType;

use App\Notification\ContactNotification;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, ContactNotification $notification)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $notification->notify($contact);
            $this->addFlash('success', 'Votre email à bien été envoyé !');
        }


        return $this->render('back/contact/contact.html.twig', [
            'controller_name' => 'ContactController',
            'form' => $form->createView()
        ]);
    }
}
