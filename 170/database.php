<?php

// hier noem je welke database server, gebruikersnaam, wachtwoord en database naam
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'world');
 
// hier proberen we connectie te maken met de database
// als er een error is geeft die dit aan 

try {
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // attributen klaar maken
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // hier geeft die een bericht met een error
    die("Verbinding maken mislukt, error:. " . $e->getMessage());
}

?>