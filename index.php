<?php
include "userControl.php";
include "controller/auth.php";

Connecte();
Forcer_connexion();

if (Connecte()) {
    switch ($_SESSION['LOGGED_ROLE'] || $data['role']) {
        case 'admin':
            include "view/homepages/admin.php";
            break;

        case 'secretaire':
            include "view/homepages/secretaire.php";
            break;

        case 'evaluateur':
            include "view/homepages/eval.php";
            break;
    }
}

