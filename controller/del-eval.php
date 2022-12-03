<?php
include "db/database.php";

if (isset($_GET['id'])) {

    if (isset($_POST['submit'])) {
        $sql = "DELETE FROM `evaluation` WHERE `evaluation`.`id` = {$_GET['id']}";
        $result = $db->prepare($sql);
        $result->execute();
        header('location: grille.php');
    }
}