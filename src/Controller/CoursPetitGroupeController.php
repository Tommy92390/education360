<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoursPetitGroupeController extends AbstractController
{
    /**
     * @Route("/cours_petit_groupe", name="cours_petit_groupe")
     */
    public function index(): Response
    {
        return $this->render('cours_petit_groupe/index.html.twig', [
            'controller_name' => 'CoursPetitGroupeController',
        ]);
    }
}
