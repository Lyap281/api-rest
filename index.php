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

            <?php

            if(isset($_GET["add"]))
            {
                include_once "./forms/form_new.html";
            }
            else
            {
                include_once "./forms/form_auth.html";
            }
            
            ?>
        </div>
        <div id="createaccount">
            <p>Pas de compte ? <a href="index.php?add">créez-en un !</a></p>
        </div>
    </body>
</html>