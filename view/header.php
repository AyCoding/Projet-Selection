<!-- HEADER -->
<?php 
$grant = "admin";
?>

<header>
    <div class="logo">
        <a href="index.php">Egnom</a>
    </div>
    <nav>

        <?php switch ($grant) {
            case 'evaluateur':
                # code...
                echo '<a href="eval.php">Espaces évalutateurs</a>';
                break;

            case 'secretaire':
                # code...
                echo '<a href="secretaire.php">Espaces secrétaires</a>';
                break;

            case 'admin':
                # code...
                echo '<a href="admin.php">Espaces administrateurs</a>';
                break;

        } ?>
        
    </nav>
</header>