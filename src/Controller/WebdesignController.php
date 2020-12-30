<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WebdesignController extends AbstractController
{
    /**
     * @Route("/webdesign", name="webdesign")
     */
    public function index(): Response
    {
        return $this->render('webdesign/index.html.twig', [
            'controller_name' => 'WebdesignController',
        ]);
    }
}
