<?php
//! LOGOUT

session_start();
unset($_SESSION['connecte']);
header('Location: /login.php');
