<?php
include "controller/userControl.php";
include "db/database.php";

//if (isset($_GET['id'])) {
//
//    if (isset($_POST['submit'])) {
//        $sql = "DELETE FROM `users` WHERE `users`.`id` = :id";
//        $result = $db->prepare($sql);
//        $result->execute([
//            ':id' => $_GET['id']
//        ]);
//        header('location: ./');
//    }
//}
// suppression d'un utilisateur, mais il ne peut pas supprimer son propre compte
if (isset($_GET['id'])) {
    if ($_SESSION['id'] != $_GET['id']) {
        if (isset($_POST['submit'])) {
            $sql = "DELETE FROM `users` WHERE `users`.`id` = :id";
            $result = $db->prepare($sql);
            $result->execute([
                ':id' => $_GET['id']
            ]);
            header('location: ./');

        }
    } else {
        $error = "Vous ne pouvez pas supprimer votre propre compte";
    }
}