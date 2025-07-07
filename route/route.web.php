<?php

use Src\Controllers\CommandeController;
use Src\Controllers\FactureController;
use Src\Controllers\SecurityController;


$route= [
        "/"=>[
                "controller"=>SecurityController::class,
                "action"=> "index"
        ],

        "/login"=>[
                "controller"=>SecurityController::class,
                "action"=> "login"
        ],

        // "/connexion"=>[
        //         "controller"=> CommandeController::class,
        //         "action"=> "index"
        // ],

        // "/commande"=>[
        //         "controller"=> CommandeController::class,
        //         "action"=> "create"
        // ],


        "/validerCommande"=> [
                 "controller"=> FactureController::class,
                 "action"=> "show"
        ],

        "/deconnexion"=> [
                 "controller"=> SecurityController::class,
                 "action"=> "deconnexion"
        ],

        


];