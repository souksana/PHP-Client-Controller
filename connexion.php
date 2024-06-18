<?php
// Connexion à la base de données
$dbname = "sae4012_eat";
$servername = "";
$port = 3306;
$username = "";
$password = "";

try {
    $mysqli = new mysqli($servername, $username, $password, $dbname, $port);
    if ($mysqli->connect_error) {
        throw new Exception("Impossible de se connecter à la base de données : " . $mysqli->connect_error);
    }
} catch (Exception $e) {
    die();
}
