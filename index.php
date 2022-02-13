<?php





require('site/controllers/controller.php');


// ROUTEUR
// include_once('./site/views/base.php');

try {
    
    

    if(isset($_GET['success'])) { 
        
        connect();
    }
    
    if(isset($_GET['gg'])) {
        
        article();    
    }
    
    else {
        
        accueil();
    }
} 
catch(Exception $e) {

    die('Erreur : ' .$e->getMessage());
    
}
