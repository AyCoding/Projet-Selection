<?php
// Paramètre de connexion
include "db/database.php";

session_start();

// Si l'envoie des pas vide.
if (isset($_POST['submit'])) {

    // Récupération des données de 'login.php'
    $username = $_POST['pseudo'];
    $password = $_POST['password'];

    // On récupère dans la table "user" tout les utilisateurs et les mots de passe
    $sql = "SELECT * FROM `users` WHERE pseudo = :pseudo";

    // On prépare la lecture de BDD
    $result = $db->prepare($sql);
    $result->execute([
        ':pseudo' => $username,
//        'password' => $password
    ]);

    // Récuperer la ligne

    if ($result->rowCount() > 0) {
        $data = $result->fetchAll();

        if (hash('sha256', $password) == $data[0]['password']) {
            echo "GOOD !";
            $_SESSION['LOGGED_USER'] = $data[0]['pseudo'];
            $_SESSION['LOGGED_ROLE'] = $data[0]['role'];
            $_SESSION['CONNECTED'] = true;
            header('location: /');
            exit();

        } else {
            $error = "Nom d'utilisateur ou mot de passe incorrects !";
        }
    }
}