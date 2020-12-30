<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoursProgrammationController extends AbstractController
{
    /**
     * @Route("/cours_programmation", name="cours_programmation")
     */
    public function index(): Response
    {
        return $this->render('cours_programmation/index.html.twig', [
            'controller_name' => 'CoursProgrammationController',
        ]);
    }
}
