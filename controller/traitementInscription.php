<?php
include "db/database.php";
// NON FONCTIONNELLES
session_start();

if (isset($_POST['submit'])) {

    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];
    $passConfirm = $_POST['password-confirm'];

    if ($password === $passConfirm) { // On vérifie que $pass et $passConfirm sont extrêmement égaux

        $sql = "INSERT INTO users (pseudo, password) VALUES ('$pseudo','$password')";
        $result = $db->prepare($sql);
        $result->execute();

        // Récuperer la ligne
        $data = $result->fetch();

        $_SESSION['LOGGED_USER'] = $data['pseudo'];
        $_SESSION['LOGGED_PASSWORD'] = $data['password'];
        $_SESSION['LOGGED_ROLE'] = $data['role'];
        $_SESSION['CONNECTED'] = true;
        header('Location: /');
    } else {
        $error = "Le mot de passe n'est pas identique !";
    }

}