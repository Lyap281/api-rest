<?php
$table = [
    [ 'user' => 1 , 'name' => 'Roger' , 'age' => 40 ],
    [ 'user' => 2 , 'name' => 'Hugo' , 'age' => 22 ],
    [ 'user' => 3 , 'name' => 'Léonie' , 'age' => 27 ]
];

echo json_code($table, JSON_PRETTY_PRINT);

// créer un list_users.html

?>

<script>
    fetch('mettre l'url généré par postman')
        .then(response => response.json)
        .then(response => console.log(response))
        .catch(error => alert("Erreur : " + error))
</script>

