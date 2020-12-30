<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreationetgestiondentrepriseController extends AbstractController
{
    /**
     * @Route("/creationetgestiondentreprise", name="creationetgestiondentreprise")
     */
    public function index(): Response
    {
        return $this->render('creationetgestiondentreprise/index.html.twig', [
            'controller_name' => 'CreationetgestiondentrepriseController',
        ]);
    }
}
