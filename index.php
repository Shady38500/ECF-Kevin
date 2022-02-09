<?php



// require('./site/views/base.php'); // temporaire

require('site/controllers/controller.php');
// ROUTEUR

try {

    if(isset($_GET['page'])) { /* Si il existe page dans l'URL*/

        if($_GET['page'] == 'accueil') {


            accueil();

        } 
        else if($_GET['page'] == 'inscription') {

            inscription();
            header('location: inscriptionView/?page=accueil');

        } 
        else {
            throw new Exception("Cette page n'existe pas ou a été supprimée.");
        }

    } 
    else {

        accueil();
    }
} 
catch(Exception $e) {

    die('Erreur : ' .$e->getMessage());
    
}
