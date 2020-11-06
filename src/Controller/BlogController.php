<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    public function list(int $page): Response
    {
      return $this->render('blog/show.html.twig', [
        'article' => 'article',
        'page' => $page,
      ]);
    }
    public function show(string $slug): Response
    {
      // code...
    }
}
