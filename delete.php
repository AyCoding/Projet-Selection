<?php
include "controller/delete-user.php";
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="src/css/style.css">
    <title>Confirmation</title>
</head>
<body>

<h1>Confirmation de la suppression</h1>

<form action="" method="POST">
    <?php
    if (isset($error)) {
        echo '<h2>' . $error . '</h2>';
        echo '<a href="./">Retour</a>';
    } else {
        echo '<input type="submit" name="submit" value="Acceptez">';
        echo '<a href="./">Retour</a>';
    }
    ?>
</form>


</body>
</html>
<style>
    h1, form {
        margin: 30px;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    form input, a {
        padding: 10px 30px;
        border: none;
        cursor: pointer;
        background: #333;
        color: #FFF;
        border-radius: 4px;
        font-size: 16px;
        text-align: center;
    }

    form input:hover {
        background: #555;
        transition: .3s;
    }
</style>