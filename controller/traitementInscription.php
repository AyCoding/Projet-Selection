<?php


session_start();

if (isset($_POST['submit'])) {

    $pseudo = $_POST['pseudo'];
    $pass = $_POST['password'];
    $passConfirm = $_POST['password-confirm'];

    if ($pass === $passConfirm) { // On vérifie que $pass et $passConfirm sont extrêmement égaux

        $sql = "INSERT INTO user (pseudo, password) VALUES ('$pseudo','$pass')";
        $req = $db->prepare($sql);
        $req->execute();

        $_SESSION['CONNECTED'] = true;
        header('Location: /');
    } else {
        $error = "Le mot de passe n'est pas identique !";
    }

}