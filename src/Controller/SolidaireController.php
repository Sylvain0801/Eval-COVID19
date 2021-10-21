<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SolidaireController extends AbstractController
{
    /**
     * @Route("/solidaire", name="solidaire")
     */
    public function index(): Response
    {
        return $this->render('solidaire/index.html.twig', [
            'active' => "Je suis solidaire contre la COVID",
        ]);
    }
}
