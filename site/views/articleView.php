<?php 
    $title = 'Accueil';
    ob_start();
?>


    <form methode="post" action="">
        <table>
            <th>Poster un article</th>
            <tr>
                <td>Titre</td>
                <td><input type="text" name="titre" placeholder="Ex: le titre de mon article"></td>
            </tr>
            <tr>
                <td>Article</td>
                <td><input type="text" name="article" placeholder="Ex: Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium error temporibus natus molestiae veritatis ducimus?" ></td>
            </tr>
        </table>
        <button type="submit">Envoyer</button>
    </form>

<?php 

    $content= ob_get_clean();
    require('base.php');

?>

