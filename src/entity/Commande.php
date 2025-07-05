<?php
namespace Src\Entity;


class Commande{
    private int $id;
    private string $date;
    private array $produitCommandes;

    // attributs navigationnels  (objet: si elle est obligatoire il faut l'initialiser avec new sinon on l'initialise a null)
    private null|Facture $facture=null;
    private Client $client;
    private Vendeur $vendeur;



    public function __construct($id=0, $date=''){
        $this->id= $id;
        $this->date= $date;
        $this->vendeur=new Vendeur();
        $this->client= new Client();
        $this->produitCommandes=[];
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
     * Get the value of produitCommandes
     */ 
    public function getProduitCommandes()
    {
        return $this->produitCommandes;
    }

    public function addProduitCommande($produitCommande)
    {
        return $this->produitCommandes[]= $produitCommande;
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

    /**
     * Get the value of client
     */ 
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set the value of client
     *
     * @return  self
     */ 
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }
}