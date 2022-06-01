<?php

namespace App\Service;
use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\Response;

class ArticleService
{
    public function __construct(private ArticleRepository $articleRepository)
    {
    }

    public function Articleview(): array
    {
        return $this->articleRepository->findAll();
    }
    
    public function Articleviewcategory(): array
    {
        return $this->articleRepository->findBy(['category']);
    }
}