<?php
namespace Src\Controllers;

use Config\Core\AbstractController;
use function Config\url;



class SecurityController extends AbstractController{

         public function __construct(){
            $this->layout="security.layout.php";
        }
        public function create(){

        }
        
        public function index(){
           $this->renderHtml("connexion/connexion.html.php"); 
            


        }

        public function login(){
                // header(header: "location: http://localhost:8000/commande");
                header("Location: " . url() . "/commande");
        }

         public function deconnexion(){

                header("Location: " . url());

                
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