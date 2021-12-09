<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class CommentsController extends AbstractController
{
    /**
     * @Route("/comments", name="comments")
     */
    public function index(): Response
    {

        return $this->render('comments/index.html.twig', [
            'comments' => 'CommentsController',
            // 'comment_form' => $form->createView(),
        ]);
    }
}
