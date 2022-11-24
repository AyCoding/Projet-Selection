<?php
// $grant = $_POST['user']

/* EXEMPLE
$db = new PDO('mysql:host=localhost;dbname=NOM;charset=UTF8;', 'USER', 'MDP');
$sql = "SELECT * FROM user WHERE user = '$user'; "; // On récupère dans la table "user" tout les user
*/

// Programme de vérification de l'utilisateur, pour afficher les pages qu'ils lui sont dédiés.
$grant = "admin";
switch ($grant) {
    case 'admin':
        // echo "admin";
        include("admin.php");
        break;
        
    case 'secretaire':
        // echo "secretaire";
        include("secretaire.php");
        break;

    case 'evaluateur':
        // echo "evaluateur";
        include("eval.php");
        break;
}