<?php
namespace Src\Service;
use Src\Repository\PersonneRepository;
 
class SecurityService{

    private PersonneRepository $personneRepository;


    public function __construct(){
      $this->personneRepository= new PersonneRepository();
    }
    
    public function seConnecter($login, $password){
        
      return $this->personneRepository->selectByLoginAndPassword($login, $password);
         

    }
    
}