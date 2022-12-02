<?php
include "controller/modif-user.php";
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="src/css/style.css">
    <title>Modification</title>
</head>
<body>

<h1>Modification du compte</h1>
<form action="" method="POST">

    <?php
    if (isset($_GET['pseudo']) && isset($_GET['role'])) {

        echo "<input type='text' name='pseudo' placeholder='pseudo' value=" . $_GET['pseudo'] . ">";
        echo "<input type='text' name='role' placeholder='role' value=" . $_GET['role'] . ">";
    }
    ?>
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

    form input {
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
