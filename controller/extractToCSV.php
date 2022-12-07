"Nom";"Prénom";"Numéro candidat";"Points";
<?php
include "../db/database.php";

// On récupère dans la table "user" tout les utilisateurs et les mots de passe
$sql = "SELECT * FROM `evaluation`";

// On prépare la lecture de BDD
$result = $db->prepare($sql);
$result->execute();


// Récuperer la ligne
$data = $result->fetchAll();
foreach ($data as $value) {
    $points = 0;
    include "../controller/points-calc.php";

    if ($points >= 10) {
        $validation = "Validé !";
    } else {
        $validation = "Refusé !";
    }
    echo '"' . $value['name'] . '";"' . $value['first_name'] . '";"' . $value['candidat'] . '";"' . $points . '/20' . '"' . "\n";
}


header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename=""Notes.csv')
?>