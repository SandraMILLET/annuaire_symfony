<?php


namespace App\Notification;


use Twig\Environment;
use App\Entity\Contact;



class ContactNotification {
          /**
           * @var \Swift_Mailer
           */

          private $mailer;


          /**
           * @var Environment
           */
         
          private $renderer;
         
         
         public function  __construct(\Swift_Mailer $mailer, Environment $renderer){
             $this->mailer = $mailer;
             $this->renderer = $renderer;
         }


         public function notify(Contact $contact){

             $message = (new \Swift_Message('Annuaire : une personne à essayé de vous contacter !'))

              ->setFrom('noreply@annuaire.fr')
              ->setTo('contact@annuaire.fr')
              ->setReplyTo($contact->getEmail())
              ->setBody($this->renderer->render('email/email.html.twig', [ 

                  'contact' => $contact

              ]), 'text/html');
              $this->mailer->send($message);



         }


} 