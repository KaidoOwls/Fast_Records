<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Commande;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class CommandeController extends AbstractController
{
    private $entityManager;
    private $mailer;

    public function __construct(EntityManagerInterface $entityManager, MailerInterface $mailer)
    {
        $this->entityManager = $entityManager;
        $this->mailer = $mailer;

    }

    #[Route('/finaliser-commande', name: 'finaliser_commande')]
    public function creerCommande(): Response
    {
        // Créer une nouvelle commande
        $commande = new Commande();
        $commande->setDateCommande(new \DateTime());
        $commande->setStatut("En attente");
        $commande->setMontantTotal("1100"); // Remplacez par le montant total réel
        $commande->setReduction("10%"); // Remplacez par la réduction réelle
        $commande->setTva("20%"); // Remplacez par la TVA réelle
        // Assurez-vous de définir également l'utilisateur associé, si nécessaire

        // Enregistrer la commande dans la base de données
        $this->entityManager->persist($commande);
        $this->entityManager->flush();

        // Envoi d'un e-mail de confirmation
        $email = (new Email())
            ->from('Fastrecords@gmail.com')
            ->to($this->getUser()->getEmail())
            ->subject('Confirmation de commande')
            ->html($this->renderView('commande/email_confirmation.html.twig', [
                'commande' => $commande,
            ]));

        $this->mailer->send($email);

        // Rediriger l'utilisateur vers une page de confirmation
        return $this->redirectToRoute('confirmation_commande');
    }

    #[Route('/confirmation-commande', name: 'confirmation_commande')]
    public function confirmationCommande(): Response
    {
        // Page de confirmation de commande
        return $this->render('commande/confirmation_commande.html.twig');
    }
}
