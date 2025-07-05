<?php
use PDO;
use PDOException;
class PersonneRepository{
        private PDO $pdo;
        public function __construct(){
            try {
                $host = 'localhost';
                $dbname = 'auchan';
                $user = 'bakary';
                $password = 'bakary';

                $dsn = "pgsql:host=$host;dbname=$dbname";

                $this->pdo = new PDO($dsn , $user , $password);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Erreur : '.$e->getMessage();
                die();
            }
        }
}