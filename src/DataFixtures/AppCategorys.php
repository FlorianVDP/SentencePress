<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppCategorys extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $dataCategories = [
            [
                "name" => "Playstation",
                "description" => "La PlayStation est une console de jeux vidéo de cinquième génération, produite par Sony Computer Entertainment à partir de 1994.",
                "slug" => "playstation"
            ],
            [
                "name" => "Nintendo",
                "description" => "La Nintendo Switch (ニンテンドースイッチ, Nintendō Suitchi?) est une console de jeux vidéo produite par Nintendo, succédant à la Wii U.",
                "slug" => "nintendo"
            ]
            ,
            [
                "name" => "Xbox",
                "description" => "La Xbox est un tout nouveau monde. C'est un monde dans lequel cohabitent des graphismes extraordinaires et une rapidité d'exécution digne de la vitesse de l'éclair.",
                "slug" => "xbox"
            ],
            [
                "name" => "Pc",
                "description" => "Pour les boss",
                "slug" => "pc"
            ]
        ];
        foreach ($dataCategories as $Category){
            $categories = new Category();
            $categories->setName($Category["name"]);
            $categories->setDescription($Category["description"]);
            $categories->setSlug($Category["slug"]);

            $manager->persist($categories);
            $manager->flush();
        }
    }
}
