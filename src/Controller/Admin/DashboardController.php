<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use App\Entity\Category;
use App\Entity\Comment;
use App\Entity\Subcategory;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('SentencePress');
    }
    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToRoute('Retour au site', 'fa fa-home', 'app_homepage');
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-briefcase');

        yield MenuItem::section('Blog');
        yield MenuItem::linkToCrud('Catégories', 'fas fa-archive', Category::class);
        yield MenuItem::linkToCrud('Sous-catégories', 'fas fa-list', Subcategory::class);
        yield MenuItem::linkToCrud('Articles', 'fas fa-book', Article::class);

        yield MenuItem::section('Users');
        yield MenuItem::linkToCrud('Users', 'fas fa-user', User::class);
        yield MenuItem::linkToCrud('Commentaires', 'fas fa-user', Comment::class);

    }
}
