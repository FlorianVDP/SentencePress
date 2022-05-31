<?php

namespace App\Controller;

use App\Service\ArticleService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(ArticleService $articleService): Response
    {
        $articles = $articleService->Articleview();

        return $this->render('public/homepage/index.html.twig', [
            'controller_name' => 'HomepageController',
            'articles' => $articles,
        ]);
    }
}
