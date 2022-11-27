<?php include("view/header.php"); ?>

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
        <tr>
            <td>John Doe</td>
            <td>1550060</td>
            <td>Validé</td>
            <td>#1</td>
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