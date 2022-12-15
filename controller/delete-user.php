<?php
include "db/database.php";

if (isset($_GET['id'])) {

    if (isset($_POST['submit'])) {
        $sql = "DELETE FROM `users` WHERE `users`.`id` = :id";
        $result = $db->prepare($sql);
        $result->execute([
            ':id' => $_GET['id']
        ]);
        header('location: ./');
    }
}
