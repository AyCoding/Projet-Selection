<?php
function Connecte(): bool
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    return !empty($_SESSION['connecte']);
}

function Forcer_Connexion(): void
{
    if (!Connecte()) {
        header('location: /');
        exit();
    }
}