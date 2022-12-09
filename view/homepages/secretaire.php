<?php

include "db/database.php";

// On récupère dans la table "user" tous les utilisateurs et les mots de passe
$sql = "SELECT * FROM `evaluation`";

// On prépare la lecture de BDD
$result = $db->prepare($sql);
$result->execute();

// Récupération de toutes la table "évaluation"
$data_secretaire = $result->fetchAll();
$_SESSION['LOGGED_ROLE'] = 'secretaire';
?>
<?php include "view/header.php"; ?>
<main>
    <h1 class="title">Espaces secrétaires</h1>

    <table>
        <thead>
        <tr>
            <th colspan="4">Listes des évaluations</th>
        </tr>
        <tr>
            <th>Nom</th>
            <th>Numéro</th>
            <th>Avis</th>
            <th>Classement</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($data_secretaire as $key => $value) {
            $points = 0;
            include "controller/points-calc.php";

            if ($points >= 10) {
                $validation = "Validé !";
            } else {
                $validation = "Refusé !";
            }
            echo "<tr>";
            echo '<td>' . $value['name'] . ' ' . $value['first_name'] . '</td>';
            echo '<td>' . $value['candidat'] . '</td>';
            echo '<td>' . $validation . '</td>';
            echo '<td>' . $points .'/20'. '</td>';
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
    <a href="controller/extractToCSV.php" class="btn__downloads">Télécharger les notes</a>
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

    .btn__downloads {
        background: #333;
        color: #FFF;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 20px auto;
        width: 200px;
        padding: 15px 30px;
        text-decoration: none !important;
    }

    .btn__downloads:hover {
        background: #555;
        transition: .3s;
    }
</style>