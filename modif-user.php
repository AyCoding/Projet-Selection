<?php
include "db/database.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['submit'])) {

        $pseudo = $_POST['pseudo'];
        $role = $_POST['role'];

//        $sql = "UPDATE `users` SET `pseudo` = '$pseudo' AND `role` = '$role' WHERE `id` = '$id'";
        $sql = "UPDATE `users` SET `pseudo`= '$pseudo',`role`= '$role' WHERE `id`= '$id'";

        $result = $db->prepare($sql);
        $result->execute();
//        header('location: /');
    }
}

/*
 * PHPMyAdmin
 * UPDATE `users` SET `id`='$id',`pseudo`='$pseudo',`role`='$role';
 * */
