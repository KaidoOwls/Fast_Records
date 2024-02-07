<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $libelle = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private ?string $prix = null;

    #[ORM\Column(nullable: true)]
    private ?int $stock = null;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 0, nullable: true)]
    private ?string $reduction = null;

    #[ORM\ManyToOne(targetEntity: Fournisseur::class, inversedBy: 'produits')]
    private ?Fournisseur $fournisseur = null;

    #[ORM\ManyToOne(targetEntity: Categorie::class, inversedBy: 'produits')]
    private ?Categorie $categorie = null;

    #[ORM\OneToMany(mappedBy: 'produit', targetEntity: Contient::class, cascade: ['persist', 'remove'])]
    private Collection $contenus;

    public function __construct()
    {
        $this->contenus = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(?string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(?int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getReduction(): ?string
    {
        return $this->reduction;
    }

    public function setReduction(?string $reduction): self
    {
        $this->reduction = $reduction;

        return $this;
    }

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): self
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * @return Collection<int, Contient>
     */
    public function getContenus(): Collection
    {
        return $this->contenus;
    }

    public function addContenu(Contient $contenu): self
    {
        if (!$this->contenus->contains($contenu)) {
            $this->contenus->add($contenu);
            $contenu->setProduit($this);
        }

        return $this;
    }

    public function removeContenu(Contient $contenu): self
    {
        if ($this->contenus->removeElement($contenu)) {
            // set the owning side to null (unless already changed)
            if ($contenu->getProduit() === $this) {
                $contenu->setProduit(null);
            }
        }

        return $this;
    }
}
