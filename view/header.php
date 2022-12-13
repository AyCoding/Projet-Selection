<link rel="stylesheet" href="src/css/style.css">
<header>
    <div class="logo">
        <a href="controller/logout.php">Déconnexion</a>
    </div>
    <nav>
        <?php
        switch ($_SESSION['LOGGED_ROLE']) {
            case 'evaluateur':
                echo '<a href="index.php">Espaces évaluateurs</a>';
                echo '<a href="grille.php">Mes grilles</a>';
                break;

            case 'secretaire':
                echo '<a href="index.php">Espaces secrétaires</a>';
                break;

            case 'admin';
                echo '<a href="index.php">Espaces administrateurs</a>';
                break;
        }
        ?>
    </nav>
</header>