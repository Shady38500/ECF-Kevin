<?php

require('./site/model/connexionModel.php');
require('./site/model/inscriptionModel.php');

function accueil() {

    $requete = connexion();

    require('./site/views/connexionView.php');
}

function inscription() {

    $requete = getInscription();
    require('./site/views/inscriptionView.php');
}