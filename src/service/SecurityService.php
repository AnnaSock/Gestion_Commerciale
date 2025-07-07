<?php
namespace Src\Service;
use Src\Repository\PersonneRepository;
 
class SecurityService{

    private PersonneRepository $personneRepository;


    public function __construct(){
        $repo= $this->personneRepository= new PersonneRepository();
        // $repo->selectByLoginAndPassword("annasock542@gmail.com", "passer123");
        $repo->selectAll();

    }

    public function seConnecter($login, $password){


    }
    
}