<?php
$results = ["message"=>"", "error" => "" , "success" => true];

$email = $_POST['email'];
$password = sha1($_POST['password']);

// Connexion à la BDD
include_once 'db.php';

$db->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ERRMODE_WARNING);

if(empty($email))
    {
        $results['message'] = "veuillez indiquer une adresse email";
        $results['success'] = false;
    }

if($results['success'])
    {
        $req = $db->prepare("INSERT INTO 'users' ('email', 'password') VALUES (:email, :password)");
        $req->execute(array(email => $email, password => $password));
    }


echo json_encode(['message' => 'Vous êtes bien enregistré dans la base']);

echo json_encode($results);

?>