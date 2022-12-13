<?php
include "db/database.php";

if (isset($_GET['id'])) {

    if (isset($_POST['submit'])) {
        $sql = "DELETE FROM `users` WHERE `users`.`id` = {$_GET['id']}";
        $result = $db->prepare($sql);
        $result->execute();
        header('location: ../index.php');
    }
}
