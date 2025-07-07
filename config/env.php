<?php

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();
define("DSN", $_ENV['dsn'] );
define("USER", $_ENV['DB_USER'] );
define("PASSWORD", $_ENV['DB_PASS'] );

