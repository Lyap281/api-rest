<?php
 //Trouver comment envoyer une requête POST avec le formulaire
?>
<h1>Se connecter</h1>
<div id="authentification">
    <form name="auth" action="index.php" method="POST">
        <label class="label labelusrname" for="username">Nom d'utilisateur ou adresse mail</label>
        <input name="username"></br>
        <label class="label labelpasswd" for="password">Mot de passe</label> - <a href="index.php">Mot de passe oublié</a>
        <input name="password" type="password"></br>
        <input class="btn" type="submit" value="Connexion">
    </form>
</div>
<div id="createaccount">
    <p>Pas de compte ? <a href="index.php?add">créez-en un !</a></p>
</div>