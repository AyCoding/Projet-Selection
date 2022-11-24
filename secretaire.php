<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <title>Espaces secrétaires</title>
</head>
<body>
<?php include("view/header.php"); ?>

<main>
    <h1 class="title">Espaces secrétaires</h1>

    <table>
        <thead>
        <tr>
            <th colspan="4">Listes des évaluations</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>The table body</td>
            <td>with two columns</td>
            <td>The table body</td>
            <td>with two columns</td>
        </tr>
        </tbody>
    </table>


</main>
</body>
</html>
<!-- CSS A REMETTRE DANS-->
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

</style>