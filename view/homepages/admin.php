<?php
include "db/database.php";

// On récupère dans la table "user" tout les utilisateurs et les mots de passe
$sql = "SELECT * FROM `users`";

// On prépare la lecture de BDD
$result = $db->prepare($sql);
$result->execute();

// Récuperer la ligne
$data_admin = $result->fetchAll();
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
        foreach ($data_admin as $key => $value) {
            echo "<tr>";
            echo '<td>' . $value['pseudo'] . '</td>';
            echo '<td>' . $value['role'] . '</td>';
            echo "<td><a href='modif.php?id={$value['id']}&pseudo={$value['pseudo']}&role={$value['role']}'>Modifier</a></td>";
            echo "<td><a href='delete.php?id={$value['id']}'>Supprimer</a></td>";
            echo "</tr>";
        }
        ?>

        </tbody>
    </table>
    <a href="create.php" class="btn__add-account">Ajouter un compte</a>
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

    .btn__add-account {
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

    .btn__add-account:hover {
        background: #555;
        transition: .3s;
    }

</style>