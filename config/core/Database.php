<?php
namespace Config\Core;

use PDO;
use PDOException;
use Dotenv\Dotenv;

class Database {
    private $connexion;
    private static $instance = null;

    private function __construct() {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
        $dotenv->load();

        $driver = $_ENV['DB_DRIVER'] ; 
        $host = $_ENV['DB_HOST'] ;
        $port = $_ENV['DB_PORT'] ;
        $dbname = $_ENV['DB_NAME'];
        $user = $_ENV['DB_USER'] ;
        $pass = $_ENV['DB_PASS'] ;

        $dsn = "$driver:host=$host;port=$port;dbname=$dbname;charset=utf8";

        try {
            $this->connexion = new PDO($dsn, $user, $pass);
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            throw new \Exception("Erreur de connexion : " . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connexion;
    }
}
