<?php

function connexion() {
        
        
    try {
        $db = new PDO('mysql:host=localhost;dbname=ecf;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    $requete = $db;
    return $requete;
}