<?php
// Paramètre de connexion
include "db/database.php";

session_start();

// Si l'envoie des pas vide.
if (isset($_POST['submit'])) {

    // Récupération des données de 'index.php'
    $username = $_POST['user'];
    $password = $_POST['password'];

    // Connexion à la BDD
    $db = new PDO('mysql:host=localhost;dbname=account;charset=UTF8;', 'root', '59$prQe$hYCfTHyh');

    // On récupère dans la table "user" tout les utilisateurs et les mots de passe
    $sql = "SELECT * FROM `users` WHERE pseudo = '$username' AND password = '$password'";

    // On prépare la lecture de BDD
    $result = $db->prepare($sql);
    $result->execute();

    // Récuperer la ligne
    $data = $result->fetch();


    if ($data['pseudo'] == $username && $data['password'] == $password) {

        switch ($data['role']) {
            case 'admin':
                include "view/homepages/admin.php";
                break;

            case 'secretaire':
                include "view/homepages/secretaire.php";
                break;

            case 'evaluateur':
                include "view/homepages/eval.php";
                break;
        }
        $_SESSION['LOGGED_USER'] = $data['pseudo'];
        $_SESSION['LOGGED_PASSWORD'] = $data['password'];
        $_SESSION['LOGGED_ROLE'] = $data['role'];
        $_SESSION['CONNECTED'] = true;
    }
    exit();
}