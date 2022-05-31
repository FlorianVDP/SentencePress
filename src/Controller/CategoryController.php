<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Service\ArticleService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Category;
use App\Entity\Article;
use App\Repository\ArticleRepository;

class CategoryController extends AbstractController
{

    #[Route('/category/{slug}', name: 'app_category')]
    public function show(Category $category, ArticleService $articleService, ArticleRepository $articleRepository): Response
    {
        $articles = $articleService->Articleview();
        $currentarticles = $articleRepository->findAll();

        return $this->render('public/category/category.html.twig', [
            'controller_name' => 'categorie' ,
            'category' => $category,
            'currentArticles' => $currentarticles,
            'articles' => $articles,
        ]);
    }

    #[Route('/category', name: 'app_category_index')]
    public function index(CategoryRepository $categoryRepository): Response
    {
        $categories = $categoryRepository->findAll();

        return $this->render('public/category/index.html.twig', [
            'categories' => $categories,
        ]);
    }
}
