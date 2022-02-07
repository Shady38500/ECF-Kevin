<?php

    include_once('./connectionDb.php');

    function getUser() {

        $cnx = connectionPdo();


        
        $requete = $cnx->prepare('SELECT email 
                                 FROM users ');
        $requete->execute(array($emailU));
        $email = $requete->fetch();
    }