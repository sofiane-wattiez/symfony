<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Comments;
use App\Form\CommentFormType;
use App\Controller\CommentsController;
use App\Repository\CommentsRepository;
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



        return $this->render('article/index.html.twig', [

            // $comments = new Comments();
            // $form = $this->createForm(CommentFormType::class, $comments);

            // $offset = max(0, $request->query->getInt('offset', 0));
            // $paginator = $commentRepository->getCommentPaginator($conference, $offset);


            // 'comments' => $CommentsRepository->findAll(),
            'articles' => $ArticleRepository->findAll(),
            // 'comments' => $paginator,
            // 'previous' => $offset - CommentsRepository::PAGINATOR_PER_PAGE,
            // 'next' => min(count($paginator), $offset + CommentsRepository::PAGINATOR_PER_PAGE),
            // 'comment_form' => $form->createView(),
        ]);
    }
}
