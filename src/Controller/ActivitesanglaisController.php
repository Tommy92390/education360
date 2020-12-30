<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActivitesanglaisController extends AbstractController
{
    /**
     * @Route("/activitesanglais", name="activitesanglais")
     */
    public function index(): Response
    {
        return $this->render('activitesanglais/index.html.twig', [
            'controller_name' => 'ActivitesanglaisController',
        ]);
    }
}
