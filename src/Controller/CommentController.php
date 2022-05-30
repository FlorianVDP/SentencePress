<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Article;
use App\Form\RegistrationFormType;
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
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager , String $slug): Response
    {
        $comment = new Comment();
        $form = $this->createForm(RegistrationFormType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($comment);
            $entityManager->flush();


            return $this->redirectToRoute('app_article');
        }

        return $this->render('public/comment/index.html.twig', [
            'commentForm' => $form->createView(),
        ]);
    }
}
