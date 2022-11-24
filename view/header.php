<!-- HEADER -->
<?php 
$grant = "admin";
?>

<header>
    <div class="logo">
        <a href="index.php">Egnom</a>
    </div>
    <nav>
            
        <?php if ($grant == "admin"): ?>
        <a href="admin.php">Espaces administrateurs</a>

        <?php elseif ($grant == "evalutateur"): ?>
        <a href="eval.php">Espaces évalutateurs</a>

        <?php elseif ($grant == "secretaire"): ?>
        <a href="secretaire.php">Espaces secrétaires</a>

        <?php endif ?>
        
    </nav>
</header>