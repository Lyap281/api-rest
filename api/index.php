<?php

header('Content-Type: application/json');


// Connexion à la BDD
include_once 'db.php';


$request = $db->prepare("SELECT * FROM user");
$request->execute();

$return["success"] = true;
$return["message"] = "Liste des utilisateurs";
$return["results"]["user"] = $request->fetchAll();

echo json_encode($return); 

?>