<?php

namespace DomaineFilliatreau\PresentationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomePageController extends Controller
{
    public function indexAction()
    {
        return $this->render('DomaineFilliatreauPresentationBundle:HomePage:index.html.twig');
    }
}
