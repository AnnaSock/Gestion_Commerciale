<?php

namespace Config;
// var_dump("Ok");




 function url(): string {
    if (!empty($_ENV['APP_URL'])) {
        return rtrim($_ENV['APP_URL'], '/');
    }

    // détection automatique en secours
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    return "$protocol://$host";
}

