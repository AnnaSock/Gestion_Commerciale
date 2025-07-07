<?php
namespace Src\Controllers;

use Config\Core\AbstractController;
use Src\Service\SecurityService;
use function Config\url;



class SecurityController extends AbstractController{

        private SecurityService $securityService;

         public function __construct(){
            $this->layout="security.layout.php";
            $service=$this->securityService= new SecurityService();
            $service->seConnecter("Anna", "Sock");
        }
        public function create(){

        }
        
        public function index(){
           $this->renderHtml("connexion/connexion.html.php"); 
            


        }

        public function login(){


                // header(header: "location: http://localhost:8000/commande");
                header("Location: " . url() . "/commande");
                exit;
        }

         public function deconnexion(){

                header("Location: " . url());
                exit;

                
                // header(header: "location: http://localhost:8000");
        }


        public  function show(){

        }
        public  function edit(){

        }
        public  function destroy(){

        }
        public  function store(){

        }
}