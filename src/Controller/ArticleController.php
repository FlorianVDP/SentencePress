<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use App\Service\ArticleService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    #[Route('/article/{slug}', name: 'app_article')]
    public function show(Article $article, ArticleService $articleService): Response
    {
        $articles = $articleService->Articleview();

        return $this->render('public/article/index.html.twig', [
            'controller_name' => 'ArticleController',
            'article' => $article,
            'articles' => $articles,
        ]);
    }
}
