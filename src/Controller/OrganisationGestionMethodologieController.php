<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrganisationGestionMethodologieController extends AbstractController
{
    /**
     * @Route("/organisation_gestion_methodologie", name="organisation_gestion_methodologie")
     */
    public function index(): Response
    {
        return $this->render('organisation_gestion_methodologie/index.html.twig', [
            'controller_name' => 'OrganisationGestionMethodologieController',
        ]);
    }
}
