<?php

namespace Src\Entity;
class ProduitCommande{
    private int $id;
    private int $qteCommande;
    private float $montant;
    private Commande $commande;
    private Produit $produit;


    public function __construct($id=0, $qteCommande=0, $montant=0){
        $this->id=$id;
        $this->qteCommande=$qteCommande;
        $this->montant=$montant;
        $this->commande=new Commande();
        $this->produit=new Produit();
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of qteCommande
     */ 
    public function getQteCommande()
    {
        return $this->qteCommande;
    }

    /**
     * Set the value of qteCommande
     *
     * @return  self
     */ 
    public function setQteCommande($qteCommande)
    {
        $this->qteCommande = $qteCommande;

        return $this;
    }

    /**
     * Get the value of montant
     */ 
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set the value of montant
     *
     * @return  self
     */ 
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get the value of commande
     */ 
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * Set the value of commande
     *
     * @return  self
     */ 
    public function setCommande($commande)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get the value of produit
     */ 
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * Set the value of produit
     *
     * @return  self
     */ 
    public function setProduit($produit)
    {
        $this->produit = $produit;

        return $this;
    }
}