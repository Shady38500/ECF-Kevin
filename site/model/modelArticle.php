<?php

// include('modelUtilisateur.php');


function editArticle() {

    try {
            
        $db = connexionDb();
        
        if(!empty($_POST['titre']) && !empty($_POST['article'])) {
            
            $titre = $_POST['titre'];
            $article = $_POST['article'];

            $req = $db->prepare('INSERT INTO article(titre, article) VALUES(?, ?)') or die(print_r($db->errorInfo()));
            $req->execute(array($titre, $article));

            header('location: ./?publie');
            exit;
        }



    

    }
    catch(Exception $e) {

        die('Erreur : ' . $e->getMessage());
    }
}


// function affArticle() {

//     try {

//         $db = connexionDb();
//         $req = $db->query('SELECT * FROM article ORDER BY id DESC');
//         return $req;
        
        
//     }
//     catch(Exception $e) {
//         die('Erreur : ' . $e->getMessage());
//     }
// }