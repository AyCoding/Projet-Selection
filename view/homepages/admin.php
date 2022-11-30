<?php
include "db/database.php";
// Connexion à la BDD
$db = new PDO("mysql:host=" . $dbServename . ";dbname=" . $dbName, $dbUsername, $dbPassword);

// On récupère dans la table "user" tout les utilisateurs et les mots de passe
$sql = "SELECT * FROM `users`";

// On prépare la lecture de BDD
$result = $db->prepare($sql);
$result->execute();

// Récuperer la ligne
$data = $result->fetch();
?>
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

        <?php
        echo "<tr>";
        echo "<td>$data[pseudo]</td>";
        echo "<td>$data[role]</td>";
        echo "<td><a href=''>Modifier</a></td>";
        echo "<td><a href=''>Supprimer</a></td>";
        echo "</tr>";
        ?>

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