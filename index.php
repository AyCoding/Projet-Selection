<?php
include "controller/userControl.php";
include "controller/auth.php";

Connecte();
Forcer_connexion();

if (Connecte()) {
    switch ($_SESSION['LOGGED_ROLE']) {
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