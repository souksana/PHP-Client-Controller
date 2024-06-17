<?php
require 'connexion.php';

function get_client($id)
{
    global $mysqli;
    $res = mysqli_query($mysqli, "SELECT * FROM `clients` WHERE `idClient` = $id");
    $client = mysqli_fetch_all($res, MYSQLI_ASSOC);
    return $client;
}

function get_all_clients()
{
    global $mysqli;
    $res = mysqli_query($mysqli, "SELECT * FROM clients");
    $clients = mysqli_fetch_all($res, MYSQLI_ASSOC);
    return $clients;
}

function insert_client()
{
    global $mysqli;

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];

    mysqli_query(
        $mysqli, "INSERT INTO clients(nom, prenom, email, telephone) VALUES ('$nom', '$prenom', '$email', '$telephone');"
    );
    return true;
    print_r($_POST);
}

function delete_client($id)
{
    global $mysqli;
    $res = mysqli_query($mysqli, "DELETE FROM `clients` WHERE `idclient` = $id");
}

function update_client($id)
{
    global $mysqli;

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];

    mysqli_query(
        $mysqli, "UPDATE `clients` SET
        `nom` = '$nom',
        `prenom` = '$prenom',
        `email` = '$email',
        `telephone` = '$telephone',
        WHERE `idClient` = $id"
        
    );
    return true;
}

function search_client()
{
    global $mysqli;

    $nom = $_POST["nom"];

    $res = mysqli_query($mysqli, "SELECT * FROM `clients` WHERE `nom` = '$nom'");
    $client = mysqli_fetch_all($res, MYSQLI_ASSOC);
    return $client;
    print_r($client);
}

?>