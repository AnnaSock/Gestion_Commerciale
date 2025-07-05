<?php
namespace Src\Entity;



class Paiement{
    private int $id;
    private string $date;
    private float $montant;
    private Vendeur $vendeur;
    private Facture $facture;     


    public function __construct($id, $date, $montant, $montantRestant){
        $this->id= $id;
        $this->date= $date;
        $this->montant= $montant;
        $this->montantRestant=$montantRestant;
        $this->vendeur=new Vendeur();
        $this->facture=new Facture();
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
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

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
     * Set the value of montantRestant
     *
     * @return  self
     */ 
    public function setMontantRestant($montantRestant)
    {
        $this->montantRestant = $montantRestant;

        return $this;
    }

  

    /**
     * Set the value of statut
     *
     * @return  self
     */ 
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get the value of commandes
     */ 
    

    /**
     * Get the value of vendeur
     */ 
    public function getVendeur()
    {
        return $this->vendeur;
    }

    /**
     * Set the value of vendeur
     *
     * @return  self
     */ 
    public function setVendeur($vendeur)
    {
        $this->vendeur = $vendeur;

        return $this;
    }

    /**
     * Get the value of facture
     */ 
    public function getFacture()
    {
        return $this->facture;
    }

    /**
     * Set the value of facture
     *
     * @return  self
     */ 
    public function setFacture($facture)
    {
        $this->facture = $facture;

        return $this;
    }
}