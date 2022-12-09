"Nom";"Prénom";"Numéro candidat";"Avis";"Points";
<?php
include "../db/database.php";

// On récupère dans la table "user" tous les utilisateurs et les mots de passe
$sql = "SELECT * FROM `evaluation`";

// On prépare la lecture de BDD
$result = $db->prepare($sql);
$result->execute();


// Récupérer la ligne
$data = $result->fetchAll();
foreach ($data as $value) {
    $points = 0;
    include "../controller/points-calc.php";

    if ($points >= 10) {
        $validation = "Validé !";
    } else {
        $validation = "Refusé !";
    }
    echo '"' . $value['name'] . '";"' . $value['first_name'] . '";"' . $value['candidat'] . '";"' . $validation . '";"' . $points . '/20' . '"' . "\n";
}
// Quel type de contenue
header('Content-Type: text/csv');

// Extraction des notes
header('Content-Disposition: attachment; filename="Notes.csv"')
?>