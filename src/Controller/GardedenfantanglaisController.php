<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GardedenfantanglaisController extends AbstractController
{
    /**
     * @Route("/gardedenfantanglais", name="gardedenfantanglais")
     */
    public function index(): Response
    {
        return $this->render('gardedenfantanglais/index.html.twig', [
            'controller_name' => 'GardedenfantanglaisController',
        ]);
    }
}
