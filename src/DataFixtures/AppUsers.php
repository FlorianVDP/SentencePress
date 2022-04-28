<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppUsers extends Fixture
{
// POURQUOI CA MARCHE PAS LE USERPASSWORDHASHER
    public function load(ObjectManager $manager, /*UserPasswordHasherInterface $userPasswordHasher*/): void
    {
        $dataUsers = [
            [
                "name" => "Floriane",
                "password" => "florian",
                "surname" => "Beebulla",
                "mail" => "f.vanderput@gmail.com",
                "role" => ["ROLE_ADMIN"],
                "birth_date" => new \DateTime("09-02-1997"),
            ],
            [
                "name" => "Clément",
                "password" => "clemence",
                "surname" => "DetectiveChanyo",
                "mail" => "clemence.larrouy@gmail.com",
                "role" => ["ROLE_ADMIN"],
                "birth_date" => new \DateTime("16-08-1993"),
            ],
            [
                "name" => "Eliot",
                "password" => "elisa",
                "surname" => "eliso",
                "mail" => "eliza.bourg@orange.fr",
                "role" => ["ROLE_ADMIN"],
                "birth_date" => new \DateTime("19-03-1998"),
            ],
            [
                "name" => "admin",
                "password" => "password",
                "surname" => "admin",
                "mail" => "admin@sentencePress.com",
                "role" => ["ROLE_ADMIN"],
                "birth_date" => new \DateTime("04-05-1983"),
            ]
        ];
        foreach ($dataUsers as $user){

            $users = new User();
            $users->setName($user["name"]);
            $users->setSurname($user["surname"]);
            $users->setPassword($user["password"]);
            /*$users->setPassword(
                $userPasswordHasher->hashPassword(
                    $users,
                    $user["password"]
                )
            );*/
            $users->setEmail($user["mail"]);
            $users->setRoles($user["role"]);
            $users->setBirthdayDate($user["birth_date"]);

            $manager->persist($users);
            $manager->flush();
        }
    }
}
