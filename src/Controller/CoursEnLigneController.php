<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoursEnLigneController extends AbstractController
{
    /**
     * @Route("/cours/en_ligne", name="cours_en_ligne")
     */
    public function index(): Response
    {
        return $this->render('cours_en_ligne/index.html.twig', [
            'controller_name' => 'CoursEnLigneController',
        ]);
    }
}
