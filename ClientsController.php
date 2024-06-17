<?php
require_once 'modeles/clients.php';

function voir_un_client($id)
{
    $clients = get_client($id);

    if ($clients == false) {
        echo "erreur";
    } else {
        require 'templates/template-client.php';
    }
}

function lister_client()
{
    $clients = get_all_clients();

    if ($clients == false) {
        echo "erreur";
    } else {
        require 'templates/template-liste-clients.php';
    }
}

function get_form_crea_client()
{
    require 'templates/template-create-client.php';
}

function store()
{
    $client = insert_client();

    if ($client == false) {
        echo "erreur";
    } else {
        // echo "Insertion bien réussie. <a href='/clients/create'>Retourner à la création</a> ou <a href='/clients'>Retourner à la liste</a>";
        header('Location: /clients');
    }
}

function destroy($id)
{
    $delete = delete_client($id);

    if ($delete == false) {
        // echo "Suppression bien réussie. <a href='/clients'>Retourner à la liste</a> ou <a href='/clients/create'>Recréer une activité</a>";
        header('Location: /clients');
        header("Status: 301 Moved Permanently");
    } else {
        echo "erreur";
    }
}

function get_form_update_client($id)
{
    $clients = get_client($id);

    if ($clients == false) {
        echo "erreur";
    } else {
        require 'templates\template-update-client.php';
    }
}

function update($id)
{
    $clients = update_client($id);

    if ($clients == true) {
        echo "Actualisation bien réussie. <a href='/clients'>Retourner à la liste</a>";
    } else {
        echo "erreur";
    }
}

function search()
{
    $clients = search_client();

    if ($clients == false) {
        echo "erreur";
    } else {
        require 'templates/template-search-resultat.php';
    }
}
