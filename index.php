<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Simplon API</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <img src="img/index.ico" alt="Logo Simplon" id="logo">
        <h1>Se connecter</h1>
        <div id="authentification">
            <form method="POST">
                <label class="label labelusrname" for="username">Nom d'utilisateur ou adresse mail</label>
                <input name="username"></br>
                <label class="label labelpasswd" for="password">Mot de passe</label> - <a href="index.php">Mot de passe oublié</a>
                <input name="password" type="password"></br>
                <input class="btn" type="submit" value="Connexion">
            </form>
        </div>
        <div id="createaccount">
            <p>Pas de compte ? <a href="index.php">créez-en un !</a></p>
        </div>
    </body>
</html>