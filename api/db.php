<?php

// Connexion à la BDD
    $host = "localhost:3306";
    $dbname = "api";
    $login = "root";
    $mdp = "";
            try
            {
                $db = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=UTF8',$login,$mdp);
                $return["success"] = true;
                $return["message"] = "Connexion à la base de données établie.";
            }
            catch(Exception $e)
            {
                $return["success"] = false;
                $return["message"] = "Connexion à la base de données impossible.";
            }

            // echo json_encode($retour);
?>