<?php

$dbServename = 'localhost';
$dbUsername = 'root';
$dbPassword = '59$prQe$hYCfTHyh';
$dbName = 'account';

// Connexion à la BDD
$conn = mysqli_connect($dbServename, $dbUsername, $dbPassword, $dbName);

// On récupère dans la table "user" tout les utilisateurs et les mots de passe
$sql = "SELECT * FROM `users` WHERE pseudo  AND password";

// On prépare la lecture de BDD
$result = mysqli_query($conn, $sql);

// Récuperer toutes la BDD
$data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <title>Espaces admininastreurs</title>
</head>
<body>
<?php include("view/header.php"); ?>

<main>
    <h1 class="title">Espaces admininastreurs</h1>

    <table>
        <thead>
        <tr>
            <th colspan="4">Listes des comptes</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <td>
                Joshua Deco
            </td>

            <td>Evaluateur</td>
            <td>Modifier</td>
            <td>Supprimer</td>
        </tr>

        </tbody>
    </table>
</main>

</body>
</html>
<!-- CSS A REMETTRE DANS FICHIERS SCSS-->
<style>
    thead {
        font-weight: bold;
    }

    table {
        margin: auto;
    }

    table,
    td {
        border: 1px solid #333;
    }

    thead,
    tfoot {
        background-color: #333;
        color: #fff;
    }

    tr > * {
        padding: 15px 30px;
    }

    td {
        width: 200px;
        max-width: 90%;
        text-align: center;
    }
</style>