<?php

namespace App\Controller\Admin;

use App\Entity\Produit;
use App\Entity\Fournisseur;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProduitCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Produit::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IntegerField::new('id')->onlyOnIndex(),
            TextField::new('libelle_court'),
            TextField::new('libelle_long'),
            TextField::new('prix'),
            IntegerField::new('stock'),
            TextField::new('reduction'),
            AssociationField::new('fournisseur')
                ->setLabel('Nom du fournisseur')
                ->formatValue(fn ($value, $entity) => $value->getNom()), // Affiche le nom du fournisseur//            AssociationField::new('Prod'),
//            AssociationField::new('contenus'),
//            AssociationField::new('fournisseurs')
//                ->setFormTypeOptions([
//                    'by_reference' => false,
//                    'multiple' => true,
//                    'required' => false,
//                    'class' => 'App\Entity\Fournisseur', // Remplacez 'App\Entity\Fournisseur' par le FQCN de votre entité Fournisseur
//                ]),
        ];
    }
}
