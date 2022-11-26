<?php
// Paramètre de connexion
$dbServename = 'localhost';
$dbUsername = 'root';
$dbPassword = '59$prQe$hYCfTHyh';
$dbName = 'account';

session_start();

// Si l'envoie des pas vide.
if (isset($_POST['submit'])) {

    // Récupération des données de 'index.php'
    $username = $_POST['user'];
    $password = $_POST['password'];

    // Connexion à la BDD
    $conn = mysqli_connect($dbServename, $dbUsername, $dbPassword, $dbName);

    // On récupère dans la table "user" tout les utilisateurs et les mots de passe
    $sql = "SELECT * FROM `users` WHERE pseudo = '$username' AND password = '$password'";

    // On prépare la lecture de BDD
    $result = mysqli_query($conn, $sql);

    // Récuperer toutes la BDD
    $data = mysqli_fetch_array($result);

    if ($data['pseudo'] == $username && $data['password'] == $password) {

        switch ($data['role']) {
            case 'admin':
                include "admin.php";
                break;

            case 'secretaire':
                include "secretaire.php";
                break;

            case 'evaluateur':
                include "eval.php";
                break;
        }
    }

}