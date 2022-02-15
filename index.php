<?php





require('site/controllers/controller.php');





try {
    
    

    if(isset($_GET['success'])) { 
        
        
        connect();
        
    }
    else if(isset($_GET['gg'])) {
        
        article();    
    }
    else if(isset($_GET['publie'])) {
        
        article();
       
    }
    else {
        
         
        accueil();
        
        
    }
    
    
    
} 
catch(Exception $e) {

    die('Erreur : ' .$e->getMessage());
    
}
