<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StagesIntensifsController extends AbstractController
{
    /**
     * @Route("/stages_intensifs", name="stages_intensifs")
     */
    public function index(): Response
    {
        return $this->render('stages_intensifs/index.html.twig', [
            'controller_name' => 'StagesIntensifsController',
        ]);
    }
}
