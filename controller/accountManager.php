<?php
include "db/database.php";
// Connexion à la BDD
$db = new PDO("mysql:host=" . $dbServename . ";dbname=" . $dbName, $dbUsername, $dbPassword);

// On récupère dans la table "user" tout les utilisateurs et les mots de passe
$sql = "SELECT * FROM `users`";

// On prépare la lecture de BDD
$result = $db->prepare($sql);
$result->execute();

// Récuperer la ligne
$data_admin = $result->fetch();
