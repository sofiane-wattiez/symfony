<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Comments;
use App\Form\CommentFormType;
use App\Controller\CommentsController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticleRepository;

// use App\Entity\Comments;

// use App\Repository\PostRepository;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_article")
     */


    public function index(ArticleRepository $ArticleRepository): Response
    {
        $comment = new Comments();
        $form = $this->createForm(CommentFormType::class, $comment);


        return $this->render('article/index.html.twig', [
            // 'comments' => $CommentsRepository->findAll(),
            'articles' => $ArticleRepository->findAll(),
            // 'comment_form' => $form->createView(),
        ]);
    }
}
