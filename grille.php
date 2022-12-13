<?php
include "controller/controlEval.php";
include "db/database.php";
include "controller/auth.php";

Connecte();
Forcer_connexion();

// On récupère dans la table "user" tous les utilisateurs et les mots de passe
$sql = "SELECT * FROM `evaluation`";

// On prépare la lecture de BDD
$result = $db->prepare($sql);
$result->execute();

// Récupération de toutes la table "evaluation"
$data = $result->fetchAll();
?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="src/css/style.css">
    <title>Grille d'évaluations</title>
</head>
<body>

<header>
    <div class="logo">
        <a href="/controller/logout.php">Déconnexion</a>
    </div>
    <nav>
        <a href="index.php">Espaces évaluateurs</a>
        <a href="grille.php">Mes grilles</a>
    </nav>
</header>

<main>
    <h1 class="title">Listes des grilles d'évaluations</h1>
    <table>
        <thead>
        <tr>
            <th colspan="13">Listes des évaluations</th>
        </tr>
        <tr>
            <th>Candidat</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Bac</th>
            <th>Travail</th>
            <th>Absence</th>
            <th>Comportement</th>
            <th>EtudeSUP</th>
            <th>AvisPP</th>
            <th>AvisProviseur</th>
            <th>LM</th>
            <th>Remarque</th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        <?php
        foreach ($data as $key => $value) {
            echo "<tr>";
            echo '<td>' . $value['candidat'] . '</td>';
            echo '<td>' . $value['name'] . '</td>';
            echo '<td>' . $value['first_name'] . '</td>';
            echo '<td>' . $value['Bac'] . '</td>';
            echo '<td>' . $value['Travail'] . '</td>';
            echo '<td>' . $value['Absence'] . '</td>';
            echo '<td>' . $value['Comportement'] . '</td>';
            echo '<td>' . $value['EtudeSUP'] . '</td>';
            echo '<td>' . $value['AvisPP'] . '</td>';
            echo '<td>' . $value['AvisProviseur'] . '</td>';
            echo '<td>' . $value['LM'] . '</td>';
            echo '<td>' . $value["Remarque"] . '</td>';
            echo "<td>
                    <a href='delete-eval.php?id={$value['id']}'>Supprimer</a>
                    <a href='modif-eval.php?id={$value['id']}&candidat={$value['candidat']}&name={$value['name']}&first_name={$value['first_name']}&Bac={$value['Bac']}&Travail={$value['Travail']}&Absence={$value['Absence']}&Comportement={$value['Comportement']}&EtudeSUP={$value['EtudeSUP']}&AvisPP={$value['AvisPP']}&AvisProviseur={$value['AvisProviseur']}&LM={$value['LM']}&Remarque={$value['Remarque']}'>Modifier</a>
                    </td>";
            echo "</tr>";
        }
        ?>

        </tbody>
    </table>

</main>

</body>
</html>
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