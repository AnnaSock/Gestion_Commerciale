<?php

namespace Src\Entity;

use TypePersonne;

class Client extends Personne{
    private int  $telephone;
    protected TypePersonne $typePersonne;
    private array $commandes;

    public function __construct($id=0,  $nom="",  $prenom="",$telephone='',$login='', $password='', $typePersonne){
        parent::__construct($id, $nom, $prenom, $login,$password,$typePersonne );
        $this->typePersonne=$typePersonne;
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
         
           return new static(
              $data["id"],
              $data["nom"],
              $data["prenom"],
              $data["telephone"],
              $data["login"],
              $data["password"],
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