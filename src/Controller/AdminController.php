<?php

namespace App\Controller;

use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $posts = $this->getDoctrine()->getRepository(Post::class)->findBy([], ['created_at' => 'DESC']);

        return $this->render('admin/index.html.twig', [
            'active' => "espace admin",
            'posts' => $posts
        ]);
    }

    /**
     * @Route("/admin-nouveau", name="new")
     */
    public function new(): Response
    {

        return $this->render('admin/new.html.twig', [
            'active' => "espace admin",
        ]);
    }
}
