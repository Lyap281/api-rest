<?php
 //Trouver comment envoyer une requête POST avec le formulaire
 /*Test d'un bout de code à remanier, trouvé ici : https://www.lije-creative.com/tuto-application-php-api-json/
 /*if (isset($_POST['mot']) && !empty($_POST['mot'])) {
    $motRecherche = urlencode(cleanString($_POST['mot']));
    $dir = 'cache';
    $match = '';
    foreach (glob($dir . '/*.json') as $fichier) {
        if (basename($fichier, '.json') == $motRecherche) {
            $match = $fichier;
        }
    }
}
    
$raw = file_get_contents($url);
file_put_contents($dir . '/' . $motRecherche . '.json', $raw);
$json = json_decode($raw);
*/ 
?>
<h1>S'inscrire</h1>
<div id="authentification">
    <form name="new" action="index.php" method="POST">
        <label class="label labelmail" for="mail">Adresse mail</label>
        <input name="mail"></br>
        <label class="label labelfirstname" for="firstname">Prénom</label>
        <input name="firstname"></br>
        <label class="label labellastname" for="lastname">Nom</label>
        <input name="lastname"></br>
        <label class="label labelpasswd" for="password">Mot de passe</label>
        <input name="password" type="password"></br>
        <input class="btn" type="submit" value="Inscription">
    </form>
</div>