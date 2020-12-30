<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InitiationanglaisController extends AbstractController
{
    /**
     * @Route("/initiationanglais", name="initiationanglais")
     */
    public function index(): Response
    {
        return $this->render('initiationanglais/index.html.twig', [
            'controller_name' => 'InitiationanglaisController',
        ]);
    }
}
