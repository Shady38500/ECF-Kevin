<?php

    function getTestimonials() {
        
        
        try{

            $bdd = new PDO('mysql:host=localhost;dbname=mvc;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        }
        catch(PDOException $e) {
            die('Erreur : '.$e->getMessage());
        }

        $requete = $bdd-> query('SELECT * 
                                 FROM testimonials');

        return $requete;


    }

    