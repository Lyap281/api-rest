<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Simplon API</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <img src="img/index.ico" alt="Logo Simplon" id="logo">
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
    </body>
</html>