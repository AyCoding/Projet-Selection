<?php
// BAC
switch ($value['Bac']) {
    case 'PRO':
        $bac_points = 8;
        break;
    case 'S/ES':
        $bac_points = 12;
        break;
    case 'L':
        $bac_points = 9;
        break;
    case 'STMG':
        $bac_points = 10;
    case 'Autres';
        break;
}
// Travail sérieux
switch ($value['Travail']) {
    case 'Oui';
        $travail_points = 1;
        break;
    case 'Non':
        $travail_points = -1;
}
// Absence
switch ($value['Absence']) {
    case 'Oui':
        $absence_points = -2;
        break;
    case 'Non':
        $absence_points = 1;
        break;
}
// Attitude / Comportement
switch ($value['Comportement']) {
    case 'Oui':
        $comportement_points = 0;
        break;
    case 'Non':
        $comportement_points = 1;
        break;
}
// Avis PP
switch ($value['AvisPP']) {
    case 'B':
        $AvisPP_points = 2;
        break;
    case 'AB':
        $AvisPP_points = 1;
        break;
    case 'Insuf.':
        $AvisPP_points = -1;
        break;
    case 'Négatif':
        $AvisPP_points = -2;
}
// Avis Proviseur
switch ($value['AvisProviseur']) {
    case 'B':
        $AvisProviseur_points = 2;
        break;
    case 'AB':
        $AvisProviseur_points = 1;
        break;
    case 'Insuf.':
        $AvisProviseur_points = -1;
        break;
    case 'Négatif':
        $AvisProviseur_points = -2;
}
// Lettre motivation
switch ($value['LM']) {
    case 'B':
        $LM_points = 2;
        break;
    case 'AB':
        $LM_points = 1;
        break;
    case 'Insuf.':
        $LM_points = -1;
        break;
    case 'Négatif':
        $LM_points = -2;
}
$points = $bac_points + $travail_points + $absence_points + $comportement_points + $AvisPP_points + $AvisProviseur_points + $LM_points;