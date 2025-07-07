<?php
namespace Config\Core;
use Config\Core\ErrorController;

class Router{
    public static function resolve($route){
        $uri= parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
        
        
        
        if(isset($route[$uri])){
            
            $action=$route[$uri]["action"];
            $controller= new $route[$uri]["controller"]();
            $controller->$action();
    
        }else{
            $erreur= new ErrorController();
            $erreur->erreur();
        }
       
      
}

}