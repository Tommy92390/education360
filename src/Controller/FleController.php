<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FleController extends AbstractController
{
    /**
     * @Route("/fle", name="fle")
     */
    public function index(): Response
    {
        return $this->render('fle/index.html.twig', [
            'controller_name' => 'FleController',
        ]);
    }
}
