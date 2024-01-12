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


        // Ajout de sous-catégories
        $sousCategorie1 = new Categorie();
        $sousCategorie1->setNom('Piano haut rouge');
        $sousCategorie1->setDescription('rouge de ouf');
        $sousCategorie1->setSousCategorie($categorie1);
        $manager->persist($sousCategorie1);

        $sousCategorie2 = new Categorie();
        $sousCategorie2->setNom('Piano haut noir');
        $sousCategorie2->setDescription('noir élégant');
        $sousCategorie2->setSousCategorie($categorie1);
        $manager->persist($sousCategorie2);

        $sousCategorie3 = new Categorie();
        $sousCategorie3->setNom('Piano haut blanc');
        $sousCategorie3->setDescription('blanc classique');
        $sousCategorie3->setSousCategorie($categorie1);
        $manager->persist($sousCategorie3);

        $sousCategorie4 = new Categorie();
        $sousCategorie4->setNom('Piano haut bleu');
        $sousCategorie4->setDescription('bleu apaisant');
        $sousCategorie4->setSousCategorie($categorie1);
        $manager->persist($sousCategorie4);

        $categorie2 = new Categorie();
        $categorie2->setNom('Basse');
        $categorie2->setDescription('Wah basse');
        $manager->persist($categorie2);


        $sousCategorie2_1 = new Categorie();
        $sousCategorie2_1->setNom('Basse 4 cordes');
        $sousCategorie2_1->setDescription('Pour les amateurs de 4 cordes');
        $sousCategorie2_1->setSousCategorie($categorie2);
        $manager->persist($sousCategorie2_1);

        $sousCategorie2_2 = new Categorie();
        $sousCategorie2_2->setNom('Basse 5 cordes');
        $sousCategorie2_2->setDescription('Pour les amateurs de 5 cordes');
        $sousCategorie2_2->setSousCategorie($categorie2);
        $manager->persist($sousCategorie2_2);

        $sousCategorie2_3 = new Categorie();
        $sousCategorie2_3->setNom('Basse fretless');
        $sousCategorie2_3->setDescription('Pour les amateurs de fretless');
        $sousCategorie2_3->setSousCategorie($categorie2);
        $manager->persist($sousCategorie2_3);

        $sousCategorie2_4 = new Categorie();
        $sousCategorie2_4->setNom('Basse acoustique');
        $sousCategorie2_4->setDescription('Pour les amateurs de basses acoustiques');
        $sousCategorie2_4->setSousCategorie($categorie2);
        $manager->persist($sousCategorie2_4);


        $categorie3 = new Categorie();
        $categorie3->setNom('Guitar electrique');
        $categorie3->setDescription('Guitar de fou');
        $manager->persist($categorie3);


        $sousCategorie3_1 = new Categorie();
        $sousCategorie3_1->setNom('Guitar Les Paul');
        $sousCategorie3_1->setDescription('Pour les amateurs de Les Paul');
        $sousCategorie3_1->setSousCategorie($categorie3);
        $manager->persist($sousCategorie3_1);

        $sousCategorie3_2 = new Categorie();
        $sousCategorie3_2->setNom('Guitar Stratocaster');
        $sousCategorie3_2->setDescription('Pour les amateurs de Stratocaster');
        $sousCategorie3_2->setSousCategorie($categorie3);
        $manager->persist($sousCategorie3_2);

        $sousCategorie3_3 = new Categorie();
        $sousCategorie3_3->setNom('Guitar Telecaster');
        $sousCategorie3_3->setDescription('Pour les amateurs de Telecaster');
        $sousCategorie3_3->setSousCategorie($categorie3);
        $manager->persist($sousCategorie3_3);

        $sousCategorie3_4 = new Categorie();
        $sousCategorie3_4->setNom('Guitar hollow body');
        $sousCategorie3_4->setDescription('Pour les amateurs de guitares hollow body');
        $sousCategorie3_4->setSousCategorie($categorie3);
        $manager->persist($sousCategorie3_4);


        $categorie4 = new Categorie();
        $categorie4->setNom('Synthétique');
        $categorie4->setDescription('synth');
        $manager->persist($categorie4);

        $categorie5 = new Categorie();
        $categorie5->setNom('VST');
        $categorie5->setDescription('Bon VST');
        $manager->persist($categorie5);

        $categorie6 = new Categorie();
        $categorie6->setNom('MAO');
        $categorie6->setDescription('Logiciel de compo');
        $manager->persist($categorie6);

        $categorie7 = new Categorie();
        $categorie7->setNom('Micro');
        $categorie7->setDescription('microphone');
        $manager->persist($categorie7);

        $categorie8 = new Categorie();
        $categorie8->setNom('Enceintes');
        $categorie8->setDescription('Monitoring');
        $manager->persist($categorie8);



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
