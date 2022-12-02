<?php
include "db/database.php";

if (isset($_POST['submit'])) {

    $pseudo = $_POST['pseudo'];
    $pass = $_POST['password'];
    $role = $_POST['role'];

    $sql = "INSERT INTO `users`(pseudo, password, role) VALUES ('$pseudo','$pass','$role')";
    $result = $db->prepare($sql);
    $result->execute();
    header('location: /');
}