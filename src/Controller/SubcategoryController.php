<?php

namespace App\Controller;

use App\Entity\Subcategory;
use App\Entity\Category;
use App\Repository\ArticleRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SubcategoryController extends AbstractController
{
    #[Route('/category/{category_slug}/{slug}', name: 'app_subcategory')]
    #[ParamConverter('category', options: ['mapping' => ['category_slug' => 'slug']])]
    #[ParamConverter('subcategory', options: ['mapping' => ['slug' => 'slug']])]
    public function show(Category $category, Subcategory $subcategory, ArticleRepository $articleRepository): Response
    {
        return $this->render('public/subcategory/index.html.twig', [
            'category' => $category,
            'subcategory' => $subcategory,
        ]);
    }
}
