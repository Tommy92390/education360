<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AideDevoirsController extends AbstractController
{
    /**
     * @Route("/aide_devoirs", name="aide_devoirs")
     */
    public function index(): Response
    {
        return $this->render('aide_devoirs/index.html.twig', [
            'controller_name' => 'AideDevoirsController',
        ]);
    }
}
