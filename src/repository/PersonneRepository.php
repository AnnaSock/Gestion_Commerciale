<?php

namespace Src\Repository;

use Config\Core\AbstractRepository;
use Config\Core\Database;
use PDO;
class PersonneRepository extends AbstractRepository {
    
    private array $table;
    private PDO $database;
    
    
    public function __construct(){
        $this->database = Database::getInstance()->getConnection();
    }
    
    
    public function selectByLoginAndPassword($login, $password):?array{
        
        $sql= "SELECT login, password FROM Personne WHERE login= :login AND password= :password AND type='Vendeur'";
        $requete= $this->database->prepare($sql);
        $requete->bindParam(':login', $login);
        $requete->bindParam(':password', $password);
        $requete->execute();
        $vendeur=$requete->fetch(PDO::FETCH_ASSOC); 
        var_dump($vendeur);
        return $vendeur ?: null;
    }
    
     public  function selectAll():array{
        $sql= "SELECT * FROM Personne";
        $requete=$this->database->prepare($sql);
        $requete->execute();
        $personne=$requete->fetch(PDO::FETCH_ASSOC);
        var_dump($personne);
        return $personne;
     }
     public  function insert(){

     }
     public  function update(){

     }
     public  function delete(){

     }
     public  function selectById(){

     }
     public  function selectBy(array $filter){

     }
      
}