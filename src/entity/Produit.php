<?php
namespace Src\Entity;



class Produit{
    private int $id;
    private string $libelle;
    private float $qteStock;
    private float $prix;



    public function __construct($id=0, $libelle='', $qteStock=0, $prix=0){
        $this->id= $id;
        $this->date= $libelle;
        $this->montant= $qteStock;
        $this->montantRestant=$prix;
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
         * Get the value of libelle
         */ 
        public function getLibelle()
        {
                return $this->libelle;
        }

        /**
         * Set the value of libelle
         *
         * @return  self
         */ 
        public function setLibelle($libelle)
        {
                $this->libelle = $libelle;

                return $this;
        }

    /**
     * Get the value of qteStock
     */ 
    public function getQteStock()
    {
        return $this->qteStock;
    }

    /**
     * Set the value of qteStock
     *
     * @return  self
     */ 
    public function setQteStock($qteStock)
    {
        $this->qteStock = $qteStock;

        return $this;
    }

        /**
         * Get the value of prix
         */ 
        public function getPrix()
        {
                return $this->prix;
        }

        /**
         * Set the value of prix
         *
         * @return  self
         */ 
        public function setPrix($prix)
        {
                $this->prix = $prix;

                return $this;
        }
}