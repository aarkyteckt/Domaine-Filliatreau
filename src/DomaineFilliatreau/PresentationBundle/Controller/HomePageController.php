<?php

namespace DomaineFilliatreau\PresentationBundle\Controller;

use DomaineFilliatreau\PresentationBundle\Entity\email;
use DomaineFilliatreau\PresentationBundle\Form\emailType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomePageController extends Controller
{
    public function indexAction(Request $request)
    {
       $email = new email();
       $form = $this->createForm(new emailType(), $email);
       // SAME AS: $form = $this->get('form.factory')->create(new emailType, $email);  
       
       // Link request & form
       // Email entity will contain user form inputs
       $form->handleRequest($request);
       
       // Check data validity
       if ($form->isValid())
       {         
        $message = \Swift_Message::newInstance()
        ->setSubject($email->getTitle())
        ->setFrom($email->getEmailAddress())
        ->setTo('domainefilliatreau@gmail.com')
        ->setBody($email->getContent());
    
        $this->get('mailer')->send($message);

        $request->getSession()->getFlashBag()->add('notice', 'Merci pour votre message');
        // On redirige vers la page de visualisation de l'annonce nouvellement créée
            //return $this->redirect($this->generateUrl('oc_platform_view', array('id' => $advert->getId())));
       } 
       
        return $this->render('DomaineFilliatreauPresentationBundle:HomePage:index.html.twig',
                array('form' => $form->createView()
                ));
    }
    
}