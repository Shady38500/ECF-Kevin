<?php
    include('modelConnexionDb.php');

    function inscription() {

        if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['mdp']&& !empty($_POST['mdpc']))) {

            $db = connexionDb();
            // VARIABLES
            $pseudo = $_POST['pseudo'];
            $email  = $_POST['email'];
            $mdp    = $_POST['mdp'];
            $mdpc   = $_POST['mdpc'];

            if($mdp != $mdpc) {

                header('location: ./?error=1&pass=1');
                exit;
            }

            // ENVOIE REQUETE INSCRIPTION
            $req = $db->prepare('INSERT INTO users(pseudo, email, mdp, mdpc)VALUES (?, ?, ?, ?)') or die(print_r($db->errorInfo()));
            
            $req->execute(array($pseudo, $email, $mdp, $mdpc));
            header('location: ./?success');
            exit;
            return $req;
        }
    }


    function connection() {


        if(!empty($_POST['email']) && !empty($_POST['mdp'])) {

            $db = connexionDb();
            // VARIABLES
            $email  = $_POST['email'];
            $mdp    = $_POST['mdp'];
            echo $email;
            $req = $db->prepare('SELECT * 
                                 FROM users
                                 WHERE email=?')or die(print_r($db->errorInfo()));
            $req->execute(array($email));

            while($user = $req->fetch()) {

                if($mdp == $user['mdp']) {

                    header('location: ./?gg');
                    exit;
                }
            }
            return $req;
        }
    }

    
