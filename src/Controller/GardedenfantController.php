<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GardedenfantController extends AbstractController
{
    /**
     * @Route("/gardedenfant", name="gardedenfant")
     */
    public function index(): Response
    {
        return $this->render('gardedenfant/index.html.twig', [
            'controller_name' => 'GardedenfantController',
        ]);
    }
}
