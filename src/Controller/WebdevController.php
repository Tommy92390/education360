<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WebdevController extends AbstractController
{
    /**
     * @Route("/webdev", name="webdev")
     */
    public function index(): Response
    {
        return $this->render('webdev/index.html.twig', [
            'controller_name' => 'WebdevController',
        ]);
    }
}
