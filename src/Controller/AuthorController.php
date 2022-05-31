<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\ArticleRepository;
use App\Service\ArticleService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    #[Route('/author/{slug}', name: 'app_author')]
    public function show(User $author, ArticleRepository $articleRepository, ArticleService $articleService): Response
    {
        $articles = $articleService->Articleview();

        return $this->render('public/author/index.html.twig', [
            'controller_name' => 'AuthorController',
            'Author' => $author ,
            'articles' => $articles,
        ]);
    }
}
