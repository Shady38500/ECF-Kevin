<?php
    $title = "Inscription";
    ob_start();
?>
<form class="aside__bloc--form" method="post" action="site/views/base.php">
    <table>
        <th>Inscription</th>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" placeholder="Ex: email@omg.fr" ></td>
            </tr>
            <tr>
                <td>Mot de passe</td>
                <td><input type="password" name= "password" placeholder="Ex: *******" ></td>
            </tr>
            <tr>
                <td>Confirmer Mot de passe</td>
                <td><input type="password" name="password_conf" placeholder="Ex: *******" ></td>
            </tr>
    </table>

    <button id="inscription" type ="submit">Inscription</button>
</form>

<?php
    $content = ob_get_clean();
    require('base.php');
?>