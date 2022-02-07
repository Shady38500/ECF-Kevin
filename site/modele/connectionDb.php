<?php   

    function connectionPdo(){

        try{
            $db = new PDO('mysql:host=localhost; dbname=ecf; charset=utf8', 'root','');
            return $db;
        }catch(Exception $e) {
     
            print "Erreur !: " .$e->getMessage() . "<br>";
        }
    }

    
?>