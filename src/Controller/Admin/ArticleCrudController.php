<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use App\Entity\Category;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ArticleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Article::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            yield TextField::new('name' , 'Titre'),
            yield TextField::new('slug' , 'Slug'),
            yield AssociationField::new('category', 'Catégorie'),
            yield AssociationField::new('subCategory' , 'Sous-catégorie'),
            yield AssociationField::new('author' , 'Auteur'),
            yield TextEditorField::new('content' , 'Contenu de l\'article')->setTrixEditorConfig([
                'blockAttributes' => [
                    'default' => ['tagName' => 'p'],
                    'heading1' => ['tagName' => 'h1'],
                    'heading2' => ['tagName' => 'h2'],
                    'heading3' => ['tagName' => 'h3'],
                    'blockquote' => ['tagName' => 'blockquote'],
                ],
                'css' => [
                    'attachment' => 'admin_file_field_attachment',
                ],

            ]),

        ];
    }
}
