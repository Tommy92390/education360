<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoursDomicileController extends AbstractController
{
    /**
     * @Route("/cours/domicile", name="cours_domicile")
     */
    public function index(): Response
    {
        return $this->render('cours_domicile/index.html.twig', [
            'controller_name' => 'CoursDomicileController',
        ]);
    }
}
