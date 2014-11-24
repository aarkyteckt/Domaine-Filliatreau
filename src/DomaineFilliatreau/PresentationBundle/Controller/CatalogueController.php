<?php

namespace DomaineFilliatreau\PresentationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class CatalogueController extends Controller
{
    public function catalogueAction()
    {
        return $this->render('DomaineFilliatreauPresentationBundle:Catalogue:catalogue.html.twig');
    }
}
