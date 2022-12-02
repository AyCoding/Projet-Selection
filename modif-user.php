<?php
include "db/database.php";

// On récupère dans la table "user" tout les utilisateurs et les mots de passe
$sql = "SELECT * FROM `users` WHERE id";

// On prépare la lecture de BDD
$result = $db->prepare($sql);
$result->execute();

// Récuperer la ligne
$data_add_user = $result->fetch();

if (isset($_GET['id'])) {
    if (isset($_POST['submit'])) {
//        $sql = "DELETE FROM `users` WHERE `users`.`id` = {$_GET['id']}";
//        $sql = "SELECT * FROM `users` WHERE  `users`.`id` = ".$_GET['id']." AND `pseudo` = ".$_POST['pseudo']." AND `role` = ".$_POST['role']."";
        $result = $db->prepare($sql);
        $result->execute();
//        header('location: /');
    }
}