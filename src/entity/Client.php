<?php

namespace Src\Entity;

use TypePersonne;

class Client extends Personne{
    private int  $telephone;
    private array $commandes;

    public function __construct($id=0,  $nom="",  $prenom="",$telephone='', $typePersonne ){
        parent::__construct($id, $nom, $prenom, $typePersonne );
        $this->typePersonne=TypePersonne::CLIENT;
        $this->telephone= $telephone;
        $this->commandes=[];
    }
     public  function toArray():array{
        return [
            "telephone"=> $this->telephone,
            "commandes"=> $this->commandes,
        ];
     }


     public static  function toObject(array $data):static{
         
           return new self(
              $data["id"],
              $data["nom"],
              $data["prenom"],
              $data["telephone"],
              $data["type"]
           ) ;
     }
    
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */ 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

   
    public function getCommandes()
    {
        return $this->commandes;
    }

    public function addCommande($commande)
    {
        return $this->commandes[]= $commande ;
    }

     
}