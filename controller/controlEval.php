<?php
include "db/database.php";
if (isset($_POST['submit'])) {

    $candidat = $_POST['candidat'];
    $name = $_POST['name'];
    $first_name = $_POST['first-name'];
    $Bac = $_POST['Bac'];
    $Travail = $_POST['Travail'];
    $Absence = $_POST['Absence'];
    $Comportement = $_POST['Comportement'];
    $EtudeSUP = $_POST['EtudeSUP'];
    $AvisPP = $_POST['AvisPP'];
    $AvisProviseur = $_POST['AvisProviseur'];
    $LM = $_POST['LM'];
    $Remarque = $_POST['Remarque'];

    $sql = "INSERT INTO `evaluation` (`candidat`, `name`, `first_name`, `Bac`, `Travail`, `Absence`, `Comportement`, `EtudeSUP`, `AvisPP`, `AvisProviseur`, `LM`, `Remarque`) 
            VALUES (:candidat,:name,:first_name,:Bac,:Travail,:Absence,:Comportement,:EtudeSUP,:AvisPP,:AvisProviseur,:LM,:Remarque)";
    $result = $db->prepare($sql);
    $result->execute([
        ':candidat' => $candidat,
        ':name' => $name,
        ':first_name' => $first_name,
        ':Bac' => $Bac,
        ':Travail' => $Travail,
        ':Absence' => $Absence,
        ':Comportement' => $Comportement,
        ':EtudeSUP' => $EtudeSUP,
        ':AvisPP' => $AvisPP,
        ':AvisProviseur' => $AvisProviseur,
        ':LM' => $LM,
        ':Remarque' => $Remarque
    ]);
}
