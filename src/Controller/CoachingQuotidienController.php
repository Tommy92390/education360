<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoachingQuotidienController extends AbstractController
{
    /**
     * @Route("/coaching_quotidien", name="coaching_quotidien")
     */
    public function index(): Response
    {
        return $this->render('coaching_quotidien/index.html.twig', [
            'controller_name' => 'CoachingQuotidienController',
        ]);
    }
}
