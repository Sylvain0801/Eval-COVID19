<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StrategyController extends AbstractController
{
    /**
     * @Route("/strategy", name="strategy")
     */
    public function index(): Response
    {
        return $this->render('strategy/index.html.twig', [
            'active' => "la stratégie vaccinale",
        ]);
    }
}
