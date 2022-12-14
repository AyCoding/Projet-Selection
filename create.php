<?php
include "controller/create-user.php";
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="src/css/style.css">
    <title>Ajouter utilisateur</title>
</head>
<body>

<h1>Ajout d'un compte</h1>

<form action="" method="POST">
    <input type="text" name="pseudo" placeholder="nom d'utilisateur">
    <input type="password" name="password" placeholder="password">
    <SELECT name="role" size="1">
        <OPTION>evaluateur
        <OPTION>secretaire
        <OPTION>admin
    </SELECT>
    <input type="submit" name="submit" value="Acceptez">
</form>

</body>
</html>
<style>
    h1, form {
        margin: 30px;
    }

    form {
        display: flex;
        gap: 10px;
    }

    form input, select {
        padding: 10px 30px;
        border: none;
        cursor: pointer;
        background: #333;
        color: #FFF;
        border-radius: 4px;
    }

    form input:hover {
        background: #555;
        transition: .3s;
    }
</style>