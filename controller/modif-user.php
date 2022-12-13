<?php
include "db/database.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['submit'])) {

        $pseudo = $_POST['pseudo'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        // Mise à jour des utilisateurs et leurs rôles
        $sql = "UPDATE `users` SET `pseudo`= :pseudo, `password` = :password,`role`= :role WHERE `id`= :id";
        $result = $db->prepare($sql);
        $result->execute([
            ':pseudo' => $pseudo,
            ':password' => hash('sha256', $password),
            ':role' => $role,
            ':id'=>$id
        ]);
        header('location: ../index.php');
    }
}