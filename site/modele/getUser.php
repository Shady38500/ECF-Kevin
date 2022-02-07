<?php

    include_once('./connectionDb.php');

    function getUser() {
        $resultat = array();

        try{
            $cnx = connectionPdo();
            $requete = $cnx->prepare('  select * 
                                        from users ');
            $requete->execute();
            $ligne = $requete->fetch();
            while($ligne) {
                $resultat[] = $ligne;
                $ligne = $requete->fetch();
            }
        }catch(PDOException $e) {
            print"Erreur !: " . $e->getMessage();
            die();

        }
        return $resultat;
    }

    

        

        
        
        

        