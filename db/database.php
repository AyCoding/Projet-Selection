<?php
$dbServename = 'localhost';
$dbUsername = 'root';
$dbPassword = '59$prQe$hYCfTHyh';
$dbName = 'selection';

try {
    $db = new PDO("mysql:host=" . $dbServename . ";dbname=" . $dbName, $dbUsername, $dbPassword,);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo utf8_encode($e->getMessage());
    die();
}