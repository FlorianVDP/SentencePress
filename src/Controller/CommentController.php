<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Article;
use App\Form\CommentFormType;
use App\Form\RegistrationFormType;
use App\Service\ArticleService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class CommentController extends AbstractController
{
    #[Route('/article/{slug}/comment', name: 'app_comment')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager , String $slug , ArticleService $articleService): Response
    {
        // créer le formulaire
        // créer le nouveau commentaire
        // vérification du formulaire
        // Associer l'article, le current User et la date du jour au commentaire créé juste au dessus

        $comment = new Comment();
        $form = $this->createForm(CommentFormType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($comment);
            $entityManager->flush();


            return $this->redirectToRoute('app_article');
        }

        $articles = $articleService->Articleview();

        return $this->render('public/comment/index.html.twig', [
            'commentForm' => $form->createView(),
            'articles' => $articles,
        ]);
    }
}
