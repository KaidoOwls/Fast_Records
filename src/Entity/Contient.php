<?php

namespace App\Entity;

use App\Repository\ContientRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContientRepository::class)]
class Contient
{
#[ORM\Id]
#[ORM\ManyToOne(targetEntity: Produit::class, inversedBy: 'contenus')]
#[ORM\JoinColumn(nullable: false)]
private ?Produit $produit = null;

#[ORM\Id]
#[ORM\ManyToOne(targetEntity: Commande::class, inversedBy: 'contenus')]
#[ORM\JoinColumn(nullable: false)]
private ?Commande $commande = null;

#[ORM\Column(type: 'string', length: 50)]
private ?string $quantite = null;

// Ajoutez d'autres propriétés si nécessaire

// Getters et setters
public function getProduit(): ?Produit
{
return $this->produit;
}

public function setProduit(?Produit $produit): static
{
$this->produit = $produit;

return $this;
}

public function getCommande(): ?Commande
{
return $this->commande;
}

public function setCommande(?Commande $commande): static
{
$this->commande = $commande;

return $this;
}

public function getQuantite(): ?string
{
return $this->quantite;
}

public function setQuantite(?string $quantite): static
{
$this->quantite = $quantite;

return $this;
}

}
