<?php
$grant = "evaluateur";
// $grant = $_POST['user']

/* EXEMPLE
$db = new PDO('mysql:host=localhost;dbname=NOM;charset=UTF8;', 'USER', 'MDP');
$sql = "SELECT * FROM user WHERE user = '$user'; "; // On récupère dans la table "user" tout les user
*/

// Programme de vérification de l'utilisateur, pour afficher les pages qu'ils lui sont dédiés.
switch ($grant) {
    case 'secretaire':
        echo "secretaire";
        // inclure les pages pour secrétaire
        // include("view/header.php")
        // include("view/body.php")
        // include("view/footer.php")

    case 'admin':
        echo "admin";
        // inclure les pages pour admin
        // include("view/header.php")
        // include("view/body.php")
        // include("view/footer.php")

    case 'evaluateur':
        echo "evaluateur";
        // inclure les pages pour évaluateur
        // include("view/header.php")
        // include("view/body.php")
        // include("view/footer.php")

}