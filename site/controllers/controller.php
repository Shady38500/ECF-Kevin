<?php

require('./site/model/modelUtilisateur.php');

function accueil() {
    
    $requete = inscription();
    require('./site/views/inscriptionView.php');
}

