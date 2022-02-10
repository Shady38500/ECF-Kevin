<?php
    $title = "Inscription";
    ob_start();
?>
<form class="aside__bloc--form" method="post" action="">
    <table>
        <th>Inscription</th>
            <tr>
                <td>Pseudo</td>
                <td><input type="text" name="pseudo" placeholder="Ex: LongduSboob" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" placeholder="Ex: email@omg.fr" required ></td>
            </tr>
            <tr>
                <td>Mot de passe</td>
                <td><input type="password" name= "mdp" placeholder="Ex: *******" required></td>
            </tr>
            <tr>
                <td>Confirmer Mot de passe</td>
                <td><input type="password" name="mdpc" placeholder="Ex: *******" required ></td>
            </tr>
    </table>

    <button id="inscription" type ="submit">Inscription</button>
</form>

<?php
    $content = ob_get_clean();
    require('base.php');
?>