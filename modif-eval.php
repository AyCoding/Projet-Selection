<?php
include "db/database.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['submit'])) {

        $candidat = $_POST['candidat'];
        $name = $_POST['name'];
        $first_name = $_POST['first_name'];
        $Bac = $_POST['Bac'];
        $Travail = $_POST['Travail'];
        $Absence = $_POST['Absence'];
        $Comportement = $_POST['Comportement'];
        $EtudeSUP = $_POST['EtudeSUP'];
        $AvisPP = $_POST['AvisPP'];
        $AvisProviseur = $_POST['AvisProviseur'];
        $LM = $_POST['LM'];
        $Remarque = $_POST['Remarque'];

        // Mise à jour des utilisateurs et leurs rôle
        $sql = "UPDATE `evaluation` SET `candidat`= '$candidat',`name`= '$name', `first_name` = '$first_name', `Bac` = '$Bac', `Travail` = '$Travail', `Absence` = '$Absence', `Comportement` = '$Comportement', `EtudeSUP` = '$Comportement', `AvisPP` = '$AvisPP', `AvisProviseur` = '$AvisProviseur', `LM` = '$LM', `Remarque` = '$Remarque' WHERE `id`= '$id'";
        $result = $db->prepare($sql);
        $result->execute();
        header('location: grille.php');
    }
}
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

<h1>Modification du eval</h1>
<form action="" method="POST">

    <?php
    if (isset($_GET['id'])) {
        echo "Candidat";
        echo "<input type='text' name='candidat' placeholder='' value=" . $_GET['candidat'] . ">";

        echo "Nom";
        echo "<input type='text' name='name' placeholder='' value=" . $_GET['name'] . ">";

        echo "Prénom";
        echo "<input type='text' name='first_name' placeholder='' value=" . $_GET['first_name'] . ">";

        echo "Bac";
        echo "<input type='text' name='Bac' placeholder='' value=" . $_GET['Bac'] . ">";

        echo "Travail";
        echo "<input type='text' name='Travail' placeholder='' value=" . $_GET['Travail'] . ">";

        echo "Absence";
        echo "<input type='text' name='Absence' placeholder='' value=" . $_GET['Absence'] . ">";

        echo "Comportement";
        echo "<input type='text' name='Comportement' placeholder='' value=" . $_GET['Comportement'] . ">";

        echo "EtudeSUP";
        echo "<input type='text' name='EtudeSUP' placeholder='' value=" . $_GET['EtudeSUP'] . ">";

        echo "AvisPP";
        echo "<input type='text' name='AvisPP' placeholder='' value=" . $_GET['AvisPP'] . ">";

        echo "AvisProviseur";
        echo "<input type='text' name='AvisProviseur' placeholder='' value=" . $_GET['AvisProviseur'] . ">";

        echo "LM";
        echo "<input type='text' name='LM' placeholder='' value=" . $_GET['LM'] . ">";

        echo "Remarque";
        echo "<input type='text' name='Remarque' placeholder='' value=" . $_GET['Remarque'] . ">";
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
        flex-flow: column;
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
