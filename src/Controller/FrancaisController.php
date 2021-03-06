<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrancaisController extends AbstractController
{
    /**
     * @Route("/francais", name="francais")
     */
    public function index(): Response
    {
        return $this->render('francais/index.html.twig', [
            'controller_name' => 'FrancaisController',
        ]);
    }
}
