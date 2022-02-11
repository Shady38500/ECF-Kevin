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

//     $requete = article(); pas forcement besoin de faire quelque chose ici a voir !
//     // require('./site/views/aticleView.php');
// }

