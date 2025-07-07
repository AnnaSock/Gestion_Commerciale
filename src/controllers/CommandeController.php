<?php

namespace Src\Controllers;

use Config\Core\AbstractController;



class CommandeController extends AbstractController{

   
    
        public function create(){
                $this->renderHtml("commande/form.html.php");
           
        }
    
         public function index(){
                $this->renderHtml("commande/listform.html.php");
        }
        public  function show(){
            
        }
        public  function edit(){

        }
        public  function destroy(){

        }
        public  function store(){
                header("location: http://localhost:8000/validerCommande");
                // header("Location: " . url() . "/validerCommande");
                exit;
        }


        // public function form(){
        //         require_once "../template/commande/form.html.php";
        // }

        // public function listform(){
        //         require_once "../template/commande/listform.html.php";
        // }
}