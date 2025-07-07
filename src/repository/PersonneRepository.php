<?php

namespace Src\Repository;

use Config\Core\AbstractRepository;
use Config\Core\Database;
use \PDO;
use Src\Entity\Client;
use Src\Entity\Vendeur;

use TypePersonne;
use function Config\dd;
class PersonneRepository extends AbstractRepository {
    
    private array $table;
    private PDO $database;
    
    
    public function __construct(){
        $this->database = Database::getInstance()->getConnection();
    }
    
    
    public function selectByLoginAndPassword($login, $password):Vendeur|null {
        $sql= "SELECT * FROM Personne WHERE login= :login AND password= :password";
        $requete= $this->database->prepare($sql);
        $requete->bindParam(':login', $login);
        $requete->bindParam(':password', $password);
        $requete->execute();

        $personne=$requete->fetch(PDO::FETCH_ASSOC); 
        

        if(!isset($personne) && $personne['type']= TypePersonne::VENDEUR->value){

            $vendeur= Vendeur::toObject($personne);
            return $vendeur;
        }

        // else
        // {
        //     $client=Client::toObject($personne);
        //     dd($client);
        //     // return $client;
        // }
        
        return null;
        

    }
    
     public  function selectAll(){
        
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

