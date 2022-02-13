<?php

require('./site/model/modelUtilisateur.php');

function accueil() {
    
    $requete = inscription();
    
    require('./site/views/inscriptionView.php');
    // include_once('./site/views/inscriptionView.php');
}

function connect(){
    $requete = connection();
    require('./site/views/connexionView.php');
    // include('./site/views/connexionView.php');
}

function article() {

    $requete = editArticle();
    require('./site/views/articleView.php');
    // include('./site/views/articleView.php');
}

