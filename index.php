<?php





require('site/controllers/controller.php');


// ROUTEUR

try {

    if(isset($_GET['success'])) { 

        
        connection();
        require('./site/views/connexionView.php');
        
        
        
        
    }
    if(isset($_GET['gg'])) {
            article();
            require('./site/views/articleView.php');
            
        }
    else {

        accueil();
    }
} 
catch(Exception $e) {

    die('Erreur : ' .$e->getMessage());
    
}
