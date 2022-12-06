<!-- 
PHP
Connexion
NON FONCTIONNELLES
 -->
<?php
$error = False;
//include "controller/userControl.php";
include "controller/traitementInscription.php";
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
                <input type="password" name="password-confirm" id="password" placeholder="Confirmation du mode de passe" required>
                <input class="btn" type="submit" id="submit" name="submit" value="S'inscrire">
                <?php
                if ($error) {
                    echo '<div style="color: red; padding: 15px 30px; margin: 10px auto;background: #F2F2F2;font-weight: bold">' . $error . '</div>';
                }
                ?>
            </div>
        </form>
        <a href="https://www.figma.com/file/ycL184J0G5BrAiWF5rMMkn/SIO1---Selection-1?node-id=4%3A2" target="_blank">
            Lien maquette figma
        </a>
    </div>
</section>
</body>

<style>
    body {
        overflow: hidden;
    }
</style>