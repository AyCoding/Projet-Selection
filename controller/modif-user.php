<?php
include "db/database.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['submit'])) {

        $pseudo = $_POST['pseudo'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        // Si le mot de pas n'est pas vide
        if (!empty(($_POST['password']))) {
            // Mise à jour des utilisateurs, mot de passe et rôles
            $sql = "UPDATE `users` SET `pseudo`= :pseudo, `password` = :password, `role`= :role WHERE `id`= :id";
            $result = $db->prepare($sql);
            $result->execute([
                ':pseudo' => $pseudo,
                ':password' => hash('sha256', $password),
                ':role' => $role,
                ':id' => $id
            ]);

        } else {

            // Mise à jour des utilisateurs et les rôles
            $sql = "UPDATE `users` SET `pseudo`= :pseudo, `role`= :role WHERE `id`= :id";
            $result = $db->prepare($sql);
            $result->execute([
                ':pseudo' => $pseudo,
                ':role' => $role,
                ':id' => $id
            ]);

        }
        header('location: ./');
    }
}