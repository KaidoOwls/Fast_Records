<?php

namespace App\DataFixtures;

use App\Entity\Utilisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Jeu1 extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
    $user1 = new Utilisateur();
    $user1->setEmail("test@hotmail.fr");
    $user1->setRoles(['ROLE_USER']);
    $user1->setPassword("0000");
    $user1->setNom("Diouf");
    $user1->setPrenom("Julien");
    $user1->setTelephone("0713445689");
    $user1->setCp("80000");
    $user1->setAdresse("20 rue de l'afpa");
    $user1->setVille("Amiens");
    $user1->setType("particulier");
    $user1->setCoefficient("0.25");
    $user1->setAdresseLivraison("20 rue de l'afpa");
    $user1->setAdresseFacturation("20 rue de l'afpa");








        $manager->persist($user1);
        $manager->flush();
    }
}
