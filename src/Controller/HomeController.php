<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Repository\CategorieRepository;
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
public function categorie(Categorie $categorie): Response
{
    return $this->render('home/categorie.html.twig', [
        'categorie' => $categorie
    ]);
}
}
