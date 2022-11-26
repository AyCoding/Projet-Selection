<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <title>Projet Selection</title>
</head>
<body>
<section class="index">
    <div class="login">
        <h1>Egnom</h1>
        <p>Sélection Parcoursup</p>
        <form action="userControl.php" method="POST">
            <div class="form-group">
                <input type="user" name="user" id="user" placeholder="Nom d’utilisateur">
                <input type="password" name="password" id="password" placeholder="Mode de passe">
                <input class="btn" type="submit" id="submit" name="submit" value="Se connecter">
                <!--<a href="eval.php" class="btn login-link" style="text-decoration: none;">Se connecter</a>-->
            </div>
        </form>
        <a href="https://www.figma.com/file/ycL184J0G5BrAiWF5rMMkn/SIO1---Selection-1?node-id=4%3A2" target="_blank">
            Lien maquette figma
        </a>
    </div>
</section>
</body>