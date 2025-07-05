<?php

namespace Src\Entity;

use TypePersonne;

 class Vendeur extends Personne{
    private int $matricule;
    private string $login;
    private string $password;
    private array $paiements;
    private array $commandes;

    public function __construct( $id=0,  $nom='',  $prenom='', $login='', $password='', $matricule=0, $typePersonne){
        parent::__construct($id, $nom, $prenom, $typePersonne);
        $this->typePersonne=TypePersonne::VENDEUR;
        $this->matricule= $matricule;
        $this->login= $login;
        $this->password= $password;
        $this->commandes= [];
        $this->paiements= [];
    }


     public function toArray():array{
         $personne=[
            "matricule"=> $this->matricule,
            "login"=> $this->login,
            "password"=>$this->password,
            "commandes"=>$this->commandes,
            "paiements"=>$this->paiements
        ];
        return $personne;
     }

      public static  function toObject(array $data):static{
           return new self(
              $data["id"],
              $data["nom"],
              $data["prenom"],
              $data["login"],
              $data["password"],
              $data["matricule"],
              $data["type"]
              
           ) ;
     }
   
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

   
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    
    public function getCommandes()
    {
        return $this->commandes;
    }

    public function addPaiement($paiement): array{

        return $this->paiements[]= $paiement ;
    }

    public function addCommande($commande): array{

        return $this->commandes[]= $commande ;
    }

   
}