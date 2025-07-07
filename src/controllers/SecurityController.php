<?php
namespace Src\Controllers;

use Config\Core\AbstractController;
use Config\Core\Session;
use Config\Core\ValidatorStatic;
use Src\Service\SecurityService;
use function Config\dd;



class SecurityController extends AbstractController{

        private SecurityService $securityService;

         public function __construct(){
            $this->layout="security.layout.php";
            $this->securityService= new SecurityService();
        }
        public function create(){
                
        }
        
        public function index(){
                
                
                $this->renderHtml("connexion/connexion.html.php"); 
                
                
                
        }
        
        // public function login(){
        //         $donnee=$this->securityService->seConnecter("annasock@gmail.com", "passer123");
        //         $login=$_POST['login'];
        //         $password= $_POST['password'];


        //         header(header: "location: http://localhost:8000/commande");
        //         exit;
        // }

        public function login() {
    // Récupération des données du formulaire
    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';

    // Nettoyage des erreurs précédentes
    ValidatorStatic::resetErrors();

    // Validation des champs
    if (ValidatorStatic::isEmpty($login)) {
        ValidatorStatic::addError('login', 'Le login est obligatoire');
    } elseif (!ValidatorStatic::isEmail($login)) {
        ValidatorStatic::addError('login', 'Le login doit être un email valide');
    }

    if (ValidatorStatic::isEmpty($password)) {
        ValidatorStatic::addError('password', 'Le mot de passe est obligatoire');
    }

    // Si erreurs, redirection vers la page de connexion
    if (!ValidatorStatic::isValid()) {
        Session::set('errors', ValidatorStatic::getErrors());
        Session::set('old', ['login' => $login]);

        header("Location: http://localhost:8000/connexion");
        exit;
    }

    // Tentative de connexion
    $utilisateur = $this->securityService->seConnecter($login, $password);

    if ($utilisateur) {
        // Connexion réussie → on sauvegarde l'utilisateur en session
        Session::set('utilisateur', $utilisateur);

        header("Location: http://localhost:8000/commande");
        exit;
    } else {
        // Mauvais identifiants
        ValidatorStatic::addError('login', 'Identifiants incorrects');
        Session::set('errors', ValidatorStatic::getErrors());
        Session::set('old', ['login' => $login]);

        header("Location: http://localhost:8000/connexion");
        exit;
    }
}


         public function deconnexion(){

                // header("Location: " . url());
                header(header: "location: http://localhost:8000");
                exit;

                
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