<?php

namespace App\Controller;

// HomeController.php

use App\Entity\Categorie;
use App\Entity\Produit;
use App\Repository\CategorieRepository;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function index(CategorieRepository $catrepo): Response
    {
        // Récupérer toutes les catégories, qu'elles aient des sous-catégories ou non
        $allCategories = $catrepo->findAll();

        // Filtrer les catégories principales (sans sous-catégories)
        $categories = array_filter($allCategories, function($categorie) {
            return $categorie->getSousCategorie() === null;
        });

        return $this->render('home/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    #[Route('/categorie/{categorie}', name: 'app_categorie')]
    public function categorie(Categorie $categorie, CategorieRepository $catrepo): Response
    {
        // Récupérer les sous-catégories de la catégorie choisie
        $sousCategories = $catrepo->findBy(['sous_categorie' => $categorie]);

        return $this->render('home/categorie.html.twig', [
            'categorie' => $categorie,
            'sousCategories' => $sousCategories,
        ]);
    }
    #[Route('/produits/{categorie}', name: 'app_produits')]
    public function produits(Categorie $categorie, ProduitRepository $produitRepository): Response
    {
        $produits = $produitRepository->findBy(['categorie' => $categorie]);


        return $this->render('catalogue/produits.html.twig', [
            'produits' => $produits,
            'categorie' => $categorie, // Ajoutez cette ligne pour définir la variable 'categorie'


        ]);
    }

    #[Route('/produit/{produit}', name: 'app_produit')]
    public function produit(Produit $produit): Response
    {
        // dd($categorie);

        return $this->render('catalogue/produit.html.twig', [
            'produit' => $produit
        ]);
    }

}
