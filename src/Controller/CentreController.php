<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CentreController extends AbstractController
{
    /**
     * @Route("/centre", name="centre")
     */
    public function index(): Response
    {
        return $this->render('centre/index.html.twig', [
            'active' => "Trouver un centre de vaccination",
        ]);
    }
}
