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
        $sousCategorie1_1 = new Categorie();
        $sousCategorie1_1->setNom('Piano haut rouge');
        $sousCategorie1_1->setDescription('rouge de ouf');
        $sousCategorie1_1->setSousCategorie($categorie1);
        $manager->persist($sousCategorie1_1);

        $sousCategorie1_2 = new Categorie();
        $sousCategorie1_2->setNom('Piano haut noir');
        $sousCategorie1_2->setDescription('noir élégant');
        $sousCategorie1_2->setSousCategorie($categorie1);
        $manager->persist($sousCategorie1_2);

        $sousCategorie1_3 = new Categorie();
        $sousCategorie1_3->setNom('Piano haut blanc');
        $sousCategorie1_3->setDescription('blanc classique');
        $sousCategorie1_3->setSousCategorie($categorie1);
        $manager->persist($sousCategorie1_3);

        $sousCategorie1_4 = new Categorie();
        $sousCategorie1_4->setNom('Piano haut bleu');
        $sousCategorie1_4->setDescription('bleu apaisant');
        $sousCategorie1_4->setSousCategorie($categorie1);
        $manager->persist($sousCategorie1_4);

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

        $sousCategorie4_1 = new Categorie();
        $sousCategorie4_1->setNom('Synthé analogique');
        $sousCategorie4_1->setDescription('Pour les amateurs de synthés analogiques');
        $sousCategorie4_1->setSousCategorie($categorie4);
        $manager->persist($sousCategorie4_1);

        $sousCategorie4_2 = new Categorie();
        $sousCategorie4_2->setNom('Synthé numérique');
        $sousCategorie4_2->setDescription('Pour les amateurs de synthés numériques');
        $sousCategorie4_2->setSousCategorie($categorie4);
        $manager->persist($sousCategorie4_2);

        $sousCategorie4_3 = new Categorie();
        $sousCategorie4_3->setNom('Workstation');
        $sousCategorie4_3->setDescription('Pour les amateurs de workstations');
        $sousCategorie4_3->setSousCategorie($categorie4);
        $manager->persist($sousCategorie4_3);

        $sousCategorie4_4 = new Categorie();
        $sousCategorie4_4->setNom('Synthé modulaire');
        $sousCategorie4_4->setDescription('Pour les amateurs de synthés modulaires');
        $sousCategorie4_4->setSousCategorie($categorie4);
        $manager->persist($sousCategorie4_4);

        $categorie5 = new Categorie();
        $categorie5->setNom('VST');
        $categorie5->setDescription('Bon VST');
        $manager->persist($categorie5);

        $sousCategorie5_1 = new Categorie();
        $sousCategorie5_1->setNom('Instruments virtuels');
        $sousCategorie5_1->setDescription('Pour les amateurs d\'instruments virtuels');
        $sousCategorie5_1->setSousCategorie($categorie5);
        $manager->persist($sousCategorie5_1);

        $sousCategorie5_2 = new Categorie();
        $sousCategorie5_2->setNom('Effets virtuels');
        $sousCategorie5_2->setDescription('Pour les amateurs d\'effets virtuels');
        $sousCategorie5_2->setSousCategorie($categorie5);
        $manager->persist($sousCategorie5_2);

        $sousCategorie5_3 = new Categorie();
        $sousCategorie5_3->setNom('Outils de production');
        $sousCategorie5_3->setDescription('Pour les amateurs d\'outils de production virtuels');
        $sousCategorie5_3->setSousCategorie($categorie5);
        $manager->persist($sousCategorie5_3);

        $sousCategorie5_4 = new Categorie();
        $sousCategorie5_4->setNom('VST gratuits');
        $sousCategorie5_4->setDescription('Pour les amateurs de VST gratuits');
        $sousCategorie5_4->setSousCategorie($categorie5);
        $manager->persist($sousCategorie5_4);



        $categorie6 = new Categorie();
        $categorie6->setNom('MAO');
        $categorie6->setDescription('Logiciel de compo');
        $manager->persist($categorie6);

        $sousCategorie6_1 = new Categorie();
        $sousCategorie6_1->setNom('DAW (Digital Audio Workstation)');
        $sousCategorie6_1->setDescription('Pour les amateurs de DAW');
        $sousCategorie6_1->setSousCategorie($categorie6);
        $manager->persist($sousCategorie6_1);

        $sousCategorie6_2 = new Categorie();
        $sousCategorie6_2->setNom('Plugins MAO');
        $sousCategorie6_2->setDescription('Pour les amateurs de plugins MAO');
        $sousCategorie6_2->setSousCategorie($categorie6);
        $manager->persist($sousCategorie6_2);

        $sousCategorie6_3 = new Categorie();
        $sousCategorie6_3->setNom('Séquenceurs');
        $sousCategorie6_3->setDescription('Pour les amateurs de séquenceurs');
        $sousCategorie6_3->setSousCategorie($categorie6);
        $manager->persist($sousCategorie6_3);

        $sousCategorie6_4 = new Categorie();
        $sousCategorie6_4->setNom('MAO mobile');
        $sousCategorie6_4->setDescription('Pour les amateurs de MAO mobile');
        $sousCategorie6_4->setSousCategorie($categorie6);
        $manager->persist($sousCategorie6_4);


        $categorie7 = new Categorie();
        $categorie7->setNom('Micro');
        $categorie7->setDescription('microphone');
        $manager->persist($categorie7);

        $sousCategorie7_1 = new Categorie();
        $sousCategorie7_1->setNom('Micros à condensateur');
        $sousCategorie7_1->setDescription('Pour les amateurs de micros à condensateur');
        $sousCategorie7_1->setSousCategorie($categorie7);
        $manager->persist($sousCategorie7_1);

        $sousCategorie7_2 = new Categorie();
        $sousCategorie7_2->setNom('Micros dynamiques');
        $sousCategorie7_2->setDescription('Pour les amateurs de micros dynamiques');
        $sousCategorie7_2->setSousCategorie($categorie7);
        $manager->persist($sousCategorie7_2);

        $sousCategorie7_3 = new Categorie();
        $sousCategorie7_3->setNom('Micros à ruban');
        $sousCategorie7_3->setDescription('Pour les amateurs de micros à ruban');
        $sousCategorie7_3->setSousCategorie($categorie7);
        $manager->persist($sousCategorie7_3);

        $sousCategorie7_4 = new Categorie();
        $sousCategorie7_4->setNom('Accessoires micro');
        $sousCategorie7_4->setDescription('Pour les amateurs d\'accessoires micro');
        $sousCategorie7_4->setSousCategorie($categorie7);
        $manager->persist($sousCategorie7_4);

        $categorie8 = new Categorie();
        $categorie8->setNom('Enceintes');
        $categorie8->setDescription('Monitoring');
        $manager->persist($categorie8);

        $sousCategorie8_1 = new Categorie();
        $sousCategorie8_1->setNom('Enceintes de studio');
        $sousCategorie8_1->setDescription('Pour les amateurs d\'enceintes de studio');
        $sousCategorie8_1->setSousCategorie($categorie8);
        $manager->persist($sousCategorie8_1);

        $sousCategorie8_2 = new Categorie();
        $sousCategorie8_2->setNom('Enceintes amplifiées');
        $sousCategorie8_2->setDescription('Pour les amateurs d\'enceintes amplifiées');
        $sousCategorie8_2->setSousCategorie($categorie8);
        $manager->persist($sousCategorie8_2);

        $sousCategorie8_3 = new Categorie();
        $sousCategorie8_3->setNom('Subwoofers');
        $sousCategorie8_3->setDescription('Pour les amateurs de subwoofers');
        $sousCategorie8_3->setSousCategorie($categorie8);
        $manager->persist($sousCategorie8_3);

        $sousCategorie8_4 = new Categorie();
        $sousCategorie8_4->setNom('Accessoires enceintes');
        $sousCategorie8_4->setDescription('Pour les amateurs d\'accessoires enceintes');
        $sousCategorie8_4->setSousCategorie($categorie8);
        $manager->persist($sousCategorie8_4);




// Produits pour la sous-catégorie 1.1 de la catégorie 1 (Piano haut rouge)
        for ($i = 1; $i <= 4; $i++) {
            $produit1_1 = new Produit();
            $produit1_1->setLibelleCourt("Produit Piano haut rouge $i");
            $produit1_1->setLibelleLong("Produit Piano haut rouge - Description $i");
            $produit1_1->setPrix(29.99 * $i);
            $produit1_1->setStock(8);
            $produit1_1->setReduction(7 * $i);
            $produit1_1->setCategories($sousCategorie1_1);
            $manager->persist($produit1_1);
        }


        $commande1 = new Commande();
        $commande1->setDateCommande(new \DateTime());
        $commande1->setStatut('En cours');
        $commande1->setMontantTotal('50.00');
        $commande1->setReduction('5.00');
        $commande1->setTva('10.00');
        $commande1->setUtilisateur($user1);
        $manager->persist($commande1);

        $contient1 = new Contient();
        $contient1->setProduit($produit1_1);
        $contient1->setCommande($commande1);
        $contient1->setQuantite('5');
        $manager->persist($contient1);


        $manager->persist($user1);
        $manager->persist($four1);
        $manager->flush();
    }
}
