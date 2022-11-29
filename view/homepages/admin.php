<?php
// Connexion à la BDD
$db = new PDO('mysql:host=localhost;dbname=projetselection;charset=UTF8;', 'root', '59$prQe$hYCfTHyh');

// On récupère dans la table "user" tout les utilisateurs et les mots de passe
$sql = "SELECT * FROM comptes";

// On prépare la lecture de BDD
$result = $db->prepare($sql);
$result->execute();

// Récuperer toutes la BDD
$data = $result->fetchAll();

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
    foreach($data as $key) {
        echo "<tr>";
        echo "<td>$key[prenom]</td>";
        echo "<td>$key[nom]</td>";
        echo "<td>$key[role]</td>";
//        echo "<td><a href="./modify?prenom=$key[prenom]nom=$key[nom]"></td>";
        echo"</tr>";
    }
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