<?php
$dbServename = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'account';

session_start();

if (isset($_POST['submit'])) {

    $username = $_POST['user'];
    $password = $_POST['password'];

    $conn = mysqli_connect($dbServename, $dbUsername, $dbPassword, $dbName);
    $sql = "SELECT * FROM `users` WHERE pseudo = '$username' AND password = '$password'";


    $result = mysqli_query($conn, $sql);

    $data = mysqli_fetch_array($result);

    if ($data['pseudo'] == $username && $data['password'] == $password) {

//        $_SESSION['connecte'] = true;
//        echo $_SESSION['connecte'] = true;

        switch ($data['role']) {
            case 'admin':
                include "admin.php";
                break;

            case 'secretaire':
                include "secretaire.php";
                break;

            case 'evaluateur':
                include "eval.php";
                break;
        }
    }

}