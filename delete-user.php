<?php
include "db/database.php";
// Connexion à la BDD
$db = new PDO("mysql:host=" . $dbServename . ";dbname=" . $dbName, $dbUsername, $dbPassword);

// On récupère dans la table "user" tout les utilisateurs et les mots de passe
$sql = "SELECT * FROM `users` WHERE id";

// On prépare la lecture de BDD
$result = $db->prepare($sql);
$result->execute();

// Récuperer la ligne
$data_del_user = $result->fetch();
echo $data_del_user['id'];

//foreach ($data_del_user as $key => $value) {
//    echo $value['id'];
//    echo "<br>";
//}
/*
 * $_GET = id=1,2,3,4,etc
 * */
//    $sql = "DELETE FROM users WHERE `users`.`id` = '4'";

if (isset($_GET['id'])) {
    echo $_GET['id'];
    if (isset($_POST['submit'])) {
        $sql = "DELETE * FROM 'users' WHERE id = '{$_GET['id']}'";
        $result = $db->prepare($sql);
        $result->execute();
//        header('location: /');
    }

}