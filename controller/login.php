<!-- 
PHP
Connexion
 -->
<?php
//require("db/database.php");

//session_start();

if (isset($_POST['submit'])) {

    $user = $_POST['user'];
    $pass = $_POST['password'];

//    $users = "";
//    if ($user == $users[$user]['name'] && $pass == $users[$user]['password']) {
//        header('Location: eval.php');
//    }
    if ($user == 'John' && $pass == '1234') {
        header( "Location: eval.php");
    }
}

?>

