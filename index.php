<?php





require('site/controllers/controller.php');

// ROUTEUR

try {

    if(isset($_GET['success'])) { 

        inscription();
        require('./site/views/connexionView.php');

        
    }

    else if(isset($_GET['gg'])) {

            connection();
            require('./site/views/articleView.php');
        }

   
    
    else {

        accueil();
    }
} 
catch(Exception $e) {

    die('Erreur : ' .$e->getMessage());
    
}
