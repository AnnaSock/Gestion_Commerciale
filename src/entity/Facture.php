<?php
namespace Src\Entity;
class Facture{
    private int $id;
    private string $date;
    private float $montant;
    private float $montantRestant;
    private Statut $statut;
    private Commande $commande;
    private array $paiements;
     


    public function __construct($id=0, $date='', $montant=0, $montantRestant=0, $statut){
        $this->id= $id;
        $this->date= $date;
        $this->montant= $montant;
        $this->montantRestant=$montantRestant;
        $this->statut=$statut;
        $this->commande=new Commande();
        $this->paiements=[];
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
     * Get the value of montantRestant
     */ 
    public function getMontantRestant()
    {
        return $this->montantRestant;
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
     * Get the value of statut
     */ 
    public function getStatut()
    {
        return $this->statut;
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
     * Get the value of paiements
     */ 
    public function getPaiements()
    {
        return $this->paiements;
    }

   

     public function addPaiement($paiement): array{

        return $this->paiements[]= $paiement ;
    }

}