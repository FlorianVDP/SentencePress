<?php

namespace App\Controller\Admin;

use App\Entity\Comment;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;

class CommentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Comment::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            yield AssociationField::new('author','Pseudo membre'),
            yield AssociationField::new('article','Article'),
            yield DateTimeField::new('date')->setFormat('hh:mm aaa dd MMM yy'),
            yield TextEditorField::new('content' , 'Contenu du commentaire')
        ];
    }
}
