<!-- 
PHP
Connexion
 -->
<?php
$error = False;
include "controller/userControl.php";
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
        <form action="" method="POST">
            <div class="form-group">
                <input type="text" name="pseudo" id="pseudo" placeholder="Nom d’utilisateur" required>
                <input type="password" name="password" id="password" placeholder="Mode de passe" required>
                <input class="btn" type="submit" id="submit" name="submit" value="Se connecter">
                <?php
                if ($error) {
                    echo '<div style="color: red; padding: 15px 30px; margin: 10px auto;background: #F2F2F2;font-weight: bold">' . $error . '</div>';
                }
                ?>
            </div>
        </form>
    </div>
</section>
</body>

<style>
    body {
        overflow: hidden;
    }
</style>