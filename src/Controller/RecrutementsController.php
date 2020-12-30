<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecrutementsController extends AbstractController
{
    /**
     * @Route("/recrutements", name="recrutements")
     */
    public function index(): Response
    {
        return $this->render('recrutements/index.html.twig', [
            'controller_name' => 'RecrutementsController',
        ]);
    }
}
