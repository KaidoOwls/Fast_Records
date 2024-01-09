<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\Entity\Commande;
use App\Entity\Contient;
use App\Entity\Fournisseur;
use App\Entity\Produit;
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



    $four1 = new Fournisseur();
    $four1->setNom("Teurki");
    $four1->setAdresse("15 rue de doullens");
    $four1->setTelephone("0712345678");
    $four1->setEmail("four@gmail.com");

        $categorie1 = new Categorie();
        $categorie1->setNom(' Piano haut');
        $categorie1->setDescription('Piano de type haut');
        $manager->persist($categorie1);

        $sousCategorie1 = new Categorie();
        $sousCategorie1->setNom('Piano haut rouge');
        $sousCategorie1->setDescription('rouge de ouf');
        $sousCategorie1->setSousCategorie($categorie1);
        $manager->persist($sousCategorie1);

        $produit1 = new Produit();
        $produit1->setLibelleCourt("Noire pure");
        $produit1->setLibelleLong("Piano");
        $produit1->setPrix('10.99');
        $produit1->setStock(1);
        $produit1->setReduction('10');
        $produit1->setCategories($categorie1);


        $commande1 = new Commande();
        $commande1->setDateCommande(new \DateTime());
        $commande1->setStatut('En cours');
        $commande1->setMontantTotal('50.00');
        $commande1->setReduction('5.00');
        $commande1->setTva('10.00');
        $commande1->setUtilisateur($user1);
        $manager->persist($commande1);

        $contient1 = new Contient();
        $contient1->setProduit($produit1);
        $contient1->setCommande($commande1);
        $contient1->setQuantite('5');
        $manager->persist($contient1);


        $manager->persist($user1);
        $manager->persist($produit1);
        $manager->persist($four1);
        $manager->flush();
    }
}
