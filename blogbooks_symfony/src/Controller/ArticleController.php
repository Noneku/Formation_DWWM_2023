<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
// use Symfony\Component\HttpFoundation\RedirectResponse;



#[Route('/article')]
class ArticleController extends AbstractController
{
   
    #[Route('/{id}', name: 'app_article_show', methods: ['GET'])]
    public function show(Article $article): Response
    { 
        $comments = $article->getComments();
        return $this->render('article/show.html.twig', [
            'article' => $article,
            'comments' => $comments
        ]);
    }
    
    // #[Route('/', name: 'app_article_default', methods: ['GET'])]
    // public function default(): RedirectResponse
    // {
    //     return $this->redirectToRoute('app_home');
    // }
}

