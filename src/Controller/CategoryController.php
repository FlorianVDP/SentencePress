<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    #[Route('/category', name: 'app_category')]
    public function index(): Response
    {
        return $this->render('public/category/index.html.twig', [
            'controller_name' => 'MaCategorie',
        ]);
    }

    #[Route('/category/{slug}', name: 'app_category-{slug}')]
    public function indexCat($slug): Response
    {
        return $this->render('public/category/category.html.twig', [
            'controller_name' => 'MaCategorie',
        ]);
    }
}
