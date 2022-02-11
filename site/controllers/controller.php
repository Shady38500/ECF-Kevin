<?php

require('./site/model/modelUtilisateur.php');

function accueil() {
    
    $requete = inscription();
    require('./site/views/inscriptionView.php');
}

function connect(){
    $requete = connection();
    // require('./site/views/connexionView.php');
}

// function article() {

//     $requete = article();
//     // require('./site/views/aticleView.php');
// }

