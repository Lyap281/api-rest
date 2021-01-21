<?php
// $results = ["message"=>"", "error" => "" , "success" => true];

// $email = $_POST['email'];
// $password = sha1($_POST['password']);

// // Connexion à la BDD
// include_once 'db.php';

// $db->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ERRMODE_WARNING);

// if(empty($email))
//     {
//         $results['message'] = "Veuillez entrer une adresse email";
//         $results['success'] = false;
//     }

// if(empty($password))
//     {
//         $results['message'] = "Veuillez entrer un mot de passe";
//         $results['success'] = false;
//     }



// if($results['success'])
//     {
//         $request = $db->prepare("SELECT * FROM user WHERE email = ? ");
//         $request->execute(array($email));
//         $nbresult = $request->rowcount();

//         if($nbresult == 1)
//         {
//             $req = $db->prepare("SELECT password FROM user WHERE email = ? ");
//             $req->execute(array($email));
//             $nbresults = $req->rowcount();
//             if($nbresults == 1)
//             {
                
//             }
//             // $req = $db->prepare("INSERT INTO user (email, password) VALUES (?, ?)");
//             // $req->execute(array($email, $password));
//             // $results['message'] = "Enregistrement effectué.";
//         }
//         else
//         {
//             $results['message'] = "Vous êtes déjà enregistré.";
//         }
//     }


// echo json_encode($results);

?>