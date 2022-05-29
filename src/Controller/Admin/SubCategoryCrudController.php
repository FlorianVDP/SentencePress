<?php

namespace App\Controller\Admin;

use App\Entity\Subcategory;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class SubCategoryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Subcategory::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            yield TextField::new('name' , 'Nom'),
            yield TextField::new('slug' , 'Slug'),
            yield AssociationField::new('category', 'Catégorie liée'),
            yield TextEditorField::new('description' , 'Description')->setTrixEditorConfig([
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
