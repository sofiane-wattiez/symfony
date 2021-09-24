<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticleRepository;
// use App\Repository\PostRepository;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_article")
     */
    public function index(ArticleRepository $ArticleRepository): Response
    {
        return $this->render('article/index.html.twig', [
            'articles' => $ArticleRepository->findAll()
        ]);
    }
}
