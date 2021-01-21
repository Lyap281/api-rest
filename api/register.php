<?php
$results = ["message"=>"", "error" => "" , "success" => true];

$email = $_POST['email'];
$password = sha1($_POST['password']);
$verif = sha1($_POST['password2']);

// Connexion à la BDD
include_once 'db.php';

$db->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ERRMODE_WARNING);

if(empty($email))
    {
        $results['message'] = "Veuillez indiquer une adresse email";
        $results['success'] = false;
    }

// if(empty($password))
//     {
//         $results['message'] = "Veuillez indiquer un mot de passe";
//         $results['success'] = false;
//     }

if($password == $verif)
    {
        if($results['success'])
            {
                $request = $db->prepare("SELECT * FROM user WHERE email = ? ");
                $request->execute(array($email));
                $nbresult = $request->rowcount();

                if($nbresult == 0)
                {
                    $req = $db->prepare("INSERT INTO user (email, password) VALUES (?, ?)");
                    $req->execute(array($email, $password));
                    $results['message'] = "Enregistrement effectué.";
                }
                else
                {
                    $results['message'] = "Vous êtes déjà enregistré.";
                }
            }
    }
    else
    {
        $results['message'] = "Les mots de passe ne sont pas identiques.";
    }




echo json_encode($results);

?>