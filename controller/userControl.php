<?php
// Paramètre de connexion
include "db/database.php";

session_start();

// Si l'envoie des pas vide.
if (isset($_POST['submit'])) {

    // Récupération des données de 'login.php'
    $username = $_POST['pseudo'];
    $password = $_POST['password'];

    // Connexion à la BDD
//    $db = new PDO("mysql:host=" . $dbServename . ";dbname=" . $dbName, $dbUsername, $dbPassword);

    // On récupère dans la table "user" tout les utilisateurs et les mots de passe
    $sql = "SELECT * FROM `users` WHERE pseudo = '$username' AND password = '$password'";

    // On prépare la lecture de BDD
    $result = $db->prepare($sql);
    $result->execute();

    // Récuperer la ligne
    $data = $result->fetch();



    if (isset($data['pseudo']) == $username && isset($data['password']) == $password) {

        $_SESSION['LOGGED_USER'] = $data['pseudo'];
        $_SESSION['LOGGED_ROLE'] = $data['role'];
        $_SESSION['CONNECTED'] = true;
        header('location: /');
        exit();

    } else {
        $error = "Nom d'utilisateur ou mot de passe incorrects !";
    }
}