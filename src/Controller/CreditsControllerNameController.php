<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreditsControllerNameController extends AbstractController
{
    #[Route('/credits/controller/name', name: 'app_credits_controller_name')]
    public function index(): Response
    {
        return $this->render('credits_controller_name/index.html.twig', [
            'controller_name' => 'CreditsControllerNameController',
        ]);
    }
}
