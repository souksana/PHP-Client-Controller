<?php
require 'ClientsController.php';

$url = $_SERVER["REDIRECT_URL"];
$method = $_SERVER["REQUEST_METHOD"];
$id = str_replace("/clients/", "", $url);
$segments = explode("/", $url);

if ((is_numeric($id)) && ($method == "GET")) {
    voir_un_client($id);
} else if ((is_numeric($id)) && ($method == "POST")) {
    $crud = $_POST["_method"];
    if ($crud == "DELETE") {
        destroy($id);
    }

    if ($crud == "PUT") {
        update($id);
    }
} else if (count($segments) == 4) {
    if ((is_numeric($segments[2])) && (is_numeric($segments[2])) && ($segments[3] == "edit") && ($method == "GET")) {
        $e = $segments[2];
        get_form_update_client($e);
    }
} else if (($url == "/clients") && ($method == "GET")) {
    lister_client();
} else if (($url == "/clients") && ($method == "POST")) {
    store();
} else if ($url == "/clients/create") {
    require 'templates/template-create-client.php';
} else if ($url == "/inscription") {
    require 'authentification\inscription.html';
} else if ($url == "/connexion") {
    require 'authentification\login.html';
} else if (($url == "/clients/recherche") && ($method == "GET")) {
    require 'templates/template-search.php';
} else if (($url == "/clients/recherche") && ($method == "POST")) {
    search();
} else if ($url === "") {
    echo "accueil";
} else {
    require 'templates/template-bienvenue.php';
}
