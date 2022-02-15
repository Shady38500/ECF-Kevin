<?php

require('./site/model/modelUtilisateur.php');
require('./site/model/modelArticle.php');

function accueil() {
    
    $requete = inscription();
    $aff = affArticle();
    require('./site/views/articleView.php');
    require('./site/views/inscriptionView.php');
    
    
}

function connect(){
    $aff = affArticle();
    $requete = connection();
    require('./site/views/articleView.php');
    require('./site/views/connexionView.php');
    
}

function article() {
    $aff = affArticle();
    $requete =  editArticle();
    require('./site/views/articleView.php');
    require('./site/views/publierArticleView.php');
    
}




