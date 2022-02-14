<?php

require('./site/model/modelUtilisateur.php');
require('./site/model/modelArticle.php');

function accueil() {
    
    $requete = inscription();
    require('./site/views/inscriptionView.php');
    
    
}

function connect(){
    $requete = connection();
    require('./site/views/connexionView.php');
    
}

function article() {

    $requete =  editArticle();
    require('./site/views/articleView.php');
    
}


