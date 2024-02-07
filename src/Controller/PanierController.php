<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Services\Panier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class PanierController extends AbstractController
{
    #[Route('/panier', name: 'app_panier')]
    public function panier(SessionInterface $session): Response
    {
        $panier = $session->get("panier", []);

        return $this->render('panier/panier.html.twig', [
            'panier' => $panier,
        ]);
    }

    #[Route('/add/{produit}', name: 'app_panier_add')]
    public function add(Produit $produit, Panier $service_panier): Response
    {

        $service_panier->add($produit);

        return $this->redirect("/panier");

    }
}



// Version 1

// #[Route('/panier', name: 'app_panier')]
//     public function panier(SessionInterface $session): Response
//     {
//         $panier = $session->get("panier", []);

//         return $this->render('panier/panier.html.twig', [
//             'panier' => $panier,
//         ]);
//     }

//     #[Route('/add/{produit}', name: 'app_panier_add')]
//     public function add(Produit $produit, SessionInterface $session): Response
//     {
//         $panier = $session->get("panier", []);
//         $panier[] = $produit;

//         $session->set("panier", $panier);

//         return $this->redirect("/panier");

//     }
