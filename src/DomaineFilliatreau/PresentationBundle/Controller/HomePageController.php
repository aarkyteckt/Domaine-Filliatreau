<?php

namespace DomaineFilliatreau\PresentationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomePageController extends Controller
{
    public function indexAction()
    {
        //return $this->render('DomaineFilliatreauPresentationBundle:HomePage:index.html.twig');
        $content = $this->get('templating')->render('DomaineFilliatreauPresentationBundle:HomePage:index.html.twig');
        return new Response($content);
    }
}
