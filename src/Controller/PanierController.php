<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Services\Panier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;


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

    #[Route('/remove/{produit}', name: 'app_panier_remove')]
    public function remove(Produit $produit, Panier $service_panier): Response
    {
        $service_panier->remove($produit);

        return $this->redirect("/panier");
    }

    #[Route('/delete/{produit}', name: 'app_panier_delete')]
    public function delete(Produit $produit, Panier $service_panier): Response
    {
        $service_panier->delete($produit);

        return $this->redirect("/panier");
    }

    #[Route('/panier/delete-all', name: 'app_panier_delete_all')]
    public function deleteAll(SessionInterface $session): RedirectResponse
    {
        $session->remove('panier');

        return $this->redirectToRoute('app_panier');
    }

    #[Route('/valider_commande', name: 'valider_commande')]
    public function validerCommande(): Response
    {
        // Vérifier si l'utilisateur est connecté
        if ($this->getUser()) {
            // Rediriger l'utilisateur vers la page de finalisation de la commande
            return $this->redirectToRoute('page_finalisation_commande');
        } else {
            // Rediriger vers la page de connexion
            return $this->redirectToRoute('app_login');
        }
    }

    #[Route('/page-finalisation-commande', name: 'page_finalisation_commande')]
    public function pageFinalisationCommande(SessionInterface $session): Response
    {
        $panier = $session->get('panier', []);
        $total = 0;
        foreach ($panier as $item) {
            // Ajoutez le calcul du sous-total de chaque produit au total
            $total += $item['quantite'] * $item['produit']->getPrix();
        }

        return $this->render('commande/page_finalisation_commande.html.twig', [
            'panier' => $panier,
            'total' => $total,
        ]);
    }
}
