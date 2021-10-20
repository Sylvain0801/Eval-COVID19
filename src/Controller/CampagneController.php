<?php

namespace App\Controller;

use App\Entity\Question;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CampagneController extends AbstractController
{
    /**
     * @Route("/campagne-vaccinale", name="campagne")
     */
    public function index(): Response
    {
        $questions = $this->getDoctrine()->getRepository(Question::class)->findAll();

        return $this->render('campagne/index.html.twig', [
            'active' => "la campagne de vaccination",
            'questions' => $questions
        ]);
    }
}
