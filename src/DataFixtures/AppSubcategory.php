<?php

namespace App\DataFixtures;

use App\Entity\Subcategory;
use App\Repository\CategoryRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppSubcategory extends Fixture
{

    public $catRepo;

    /**
     * AppSubcategory constructor.
     */
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->catRepo = $categoryRepository;
    }

    public function load(ObjectManager $manager): void
    {
        $dataSubCategories = [
            [
                "category" => "Playstation",
                "name" => "Playstation 1",
                "description" => "Première version de la Playstation de sony.",
                "slug" => "playstation-1"
            ],
            [
                "category" => "Playstation",
                "name" => "Playstation 2",
                "description" => "Deuxieme version de la Playstation de sony.",
                "slug" => "playstation-2"
            ],
            [
                "category" => "Playstation",
                "name" => "Playstation 3",
                "description" => "Troisieme version de la Playstation de sony.",
                "slug" => "playstation-3"
            ],
            [
                "category" => "Playstation",
                "name" => "Playstation 4",
                "description" => "Quatrième version de la Playstation de sony.",
                "slug" => "playstation-4"
            ],
            [
                "category" => "Playstation",
                "name" => "Playstation 5",
                "description" => "Cinquieme version de la Playstation de sony.",
                "slug" => "playstation-5"
            ],
            [
                "category" => "Nintendo",
                "name" => "Nintendo DS",
                "description" => "Console portable avec ecran tactile",
                "slug" => "nintendo-ds"
            ],
            [
                "category" => "Nintendo",
                "name" => "Nintendo Switch",
                "description" => "Console hybride de Nintendo",
                "slug" => "nintendo-switch"
            ],
            [
                "category" => "Xbox",
                "name" => "Xbox",
                "description" => "Première version de la Xbox de MicroDoux.",
                "slug" => "xbox"
            ],
            [
                "category" => "Xbox",
                "name" => "Xbox 360",
                "description" => "Deuxieme version de la Xbox de MicroDoux.",
                "slug" => "xbox-360"
            ],
            [
                "category" => "Xbox",
                "name" => "Xbox One",
                "description" => "Troisieme version de la Xbox de MicroDoux.",
                "slug" => "xbox-one"
            ],
            [
                "category" => "Xbox",
                "name" => "Xbox Series",
                "description" => "Quatrieme version de la Xbox de MicroDoux.",
                "slug" => "xbox-series"
            ],
            [
                "category" => "Pc",
                "name" => "Windows",
                "description" => "Windows pour les boss",
                "slug" => "windows"
            ],
            [
                "category" => "Pc",
                "name" => "Mac OS",
                "description" => "Mac pour les cracs",
                "slug" => "mac-os"
            ]
        ];


        foreach ($dataSubCategories as $subCategory){

            $category = $this->catRepo->findOneBy(array('name' => $subCategory["category"]));
            $subCategories = new Subcategory();
            $subCategories->setCategory($category);
            $subCategories->setName($subCategory["name"]);
            $subCategories->setDescription($subCategory["description"]);
            $subCategories->setSlug($subCategory["slug"]);

            $manager->persist($subCategories);
            $manager->flush();
        }

    }
}
