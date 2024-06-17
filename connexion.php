<?php
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = mysqli_connect('localhost', 'root', '', 'eat');
// mysqli_set_charset($mysqli, "utf8");

// $connexion = "mysql:host=mysql-sae4012.alwaysdata.net;port=3306;dbname=sae4012_eat";

// Connexion à la base de données
$dbname = "sae4012_eat";
$servername = "mysql-sae4012.alwaysdata.net";
$port = 3306;
$username = "sae4012";
$password = "jd_souk_4012";

try {
    $mysqli = new mysqli($servername, $username, $password, $dbname, $port);
    if ($mysqli->connect_error) {
        throw new Exception("Impossible de se connecter à la base de données : " . $mysqli->connect_error);
    }
} catch (Exception $e) {
    die();
}
