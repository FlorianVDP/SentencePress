<?php


namespace App\Menu;


use App\Repository\CategoryRepository;
use App\Repository\SubcategoryRepository;

class MenuGenerator
{
    /**
     * @var CategoryRepository
     */
    private CategoryRepository $categoryRepository;
    /**
     * @var SubcategoryRepository
     */
    private SubcategoryRepository $subcategoryRepository;


    /**
     * MenuGenerator constructor.
     */
    public function __construct(CategoryRepository $categoryRepository, SubcategoryRepository $subcategoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->subcategoryRepository = $subcategoryRepository;
    }

    public function generate() :array
    {
        $categories =  $this->categoryRepository->findAll();
        return [$categories];
    }
}