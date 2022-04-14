<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Uid\Uuid;

class AppUsers extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $dataUsers = [
            [
                "name" => "Florian",
                "surname" => "Beebulle",
                "mail" => "mrvdpflorian@gmail.com",
                "role" => "[]",
                "birth_date" => new \DateTime("09-02-1997"),
            ],
            [
                "name" => "Clémence",
                "surname" => "DetectiveChanya",
                "mail" => "clemence.larrouy@gmail.com",
                "role" => "[]",
                "birth_date" => new \DateTime("16-08-1993"),
            ],
            [
                "name" => "Elisa",
                "surname" => "Elisou",
                "mail" => "eliza.bourg@orange.fr",
                "role" => "[]",
                "birth_date" => new \DateTime("19-03-1998"),
            ],
            [
                "name" => "admin",
                "surname" => "admin",
                "mail" => "admin@sentencePress.com",
                "role" => "[]",
                "birth_date" => new \DateTime("04-05-1983"),
            ]
        ];
        foreach ($dataUsers as $user){

            $users = new User();
            //$uuid = Uuid::v1();
            //dump($uuid); die();
            //$users->setUuid("");
            $users->setName($user["name"]);
            $users->setSurname($user["surname"]);
            $users->setMail($user["mail"]);
            $users->setRole($user["role"]);
            $users->setBirthDate($user["birth_date"]);

            $manager->persist($users);
            $manager->flush();
        }
    }
}
