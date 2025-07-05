<?php

namespace Src\Entity;

use Config\Core\AbstractEntity;
use TypePersonne;

abstract class Personne extends AbstractEntity{
    protected  int $id;
    protected string $nom;
    protected string $prenom;
    protected TypePersonne $typePersonne;

    public function __construct( $id=0,  $nom="",  $prenom="", $typePersonne){
        $this->id=$id;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->typePersonne=$typePersonne;
    }

    public  function toArray():array{
        return [
            "id"=> $this->id,
            "nom"=>$this ->nom,
            "prenom"=> $this->prenom,
            "typePersonne"=>$this->typePersonne
        ];
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
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of typePersonne
     */ 
    public function getTypePersonne()
    {
        return $this->typePersonne;
    }

    /**
     * Set the value of typePersonne
     *
     * @return  self
     */ 
    public function setTypePersonne($typePersonne)
    {
        $this->typePersonne = $typePersonne;

        return $this;
    }

   
   
   
}