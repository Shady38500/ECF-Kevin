<?php
    $title = "Connexion";
    ob_start();
?>
<form method="post" action="">
    <table>
        <th>Connexion</th>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Mot de passe</td>
                <td><input type="password" name="mdp" required></td>
            </tr>
    </table>
    <button id="inscription" type="submit">Connexion</button>
</form>
                    

<?php

    $content = ob_get_clean();
    require('base.php');
?>