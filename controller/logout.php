<!-- 
PHP
Déconnexion
-->
<?php
session_start();
unset($_SESSION);
header('Location: /')
?>