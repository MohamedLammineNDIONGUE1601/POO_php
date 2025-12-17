<?php

require_once 'config/connexion.php';

// On affiche une condition sur $_GET
// On commence le traitement si une donnée en GET existe et n'est pas vide.

if()(!empty($_GET)){

    // Création d'une requête préparée
    // Cette requête vérifiz si le client existe.
    
    $requete = $pdo->prepare('SELECT * FROM clients WHERE id_client = ?');
    $requete->execute([$_GET['id_client']]);
    $client = $requete->fetch();

    // Si le client existe, on le supprime
    // Si le client n'existe pas, on affiche un message
    if(!empty($client)){

        $pdo->prepare('DELETE FROM clients WHERE id_client = ?')->execute([$_GET['id_client']]);
        echo 'le client a été supprimé';
    }else {
        echo "le client que vous voulez supprimer n'existe pas";
    }
}
