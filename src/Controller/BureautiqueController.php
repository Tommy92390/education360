<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BureautiqueController extends AbstractController
{
    /**
     * @Route("/bureautique", name="bureautique")
     */
    public function index(): Response
    {
        return $this->render('bureautique/index.html.twig', [
            'controller_name' => 'BureautiqueController',
        ]);
    }
}
