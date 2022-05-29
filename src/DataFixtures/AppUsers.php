<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppUsers extends Fixture
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $userPasswordHasher){
        $this->passwordHasher = $userPasswordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        $dataUsers = [
            [
                "name" => "Florian",
                "password" => "florian",
                "pseudo" => "Beebulle",
                "mail" => "mrvdpflorian@gmail.com",
                "role" => ["ROLE_ADMIN"],
                "birth_date" => new \DateTime("09-02-1997"),
            ],
            [
                "name" => "Clémence",
                "password" => "clemence",
                "pseudo" => "DetectiveChanya",
                "mail" => "clemence.larrouy@gmail.com",
                "role" => ["ROLE_ADMIN"],
                "birth_date" => new \DateTime("16-08-1993"),
            ],
            [
                "name" => "admin",
                "password" => "admin",
                "pseudo" => "admin",
                "mail" => "admin@sentencePress.com",
                "role" => ["ROLE_ADMIN"],
                "birth_date" => new \DateTime("04-05-1983"),
            ]
        ];
        foreach ($dataUsers as $user){

            $users = new User();
            $users->setName($user["name"]);
            $users->setPseudo($user["pseudo"]);
            $users->setPassword($user["password"]);
            $users->setPassword(
                $this->passwordHasher->hashPassword(
                    $users,
                    $user["password"]
                )
            );
            $users->setEmail($user["mail"]);
            $users->setRoles($user["role"]);
            $users->setBirthdayDate($user["birth_date"]);

            $manager->persist($users);
            $manager->flush();
        }
    }
}
