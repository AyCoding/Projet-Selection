<?php
$_SESSION['LOGGED_ROLE'] = 'evaluateur';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <title>Espaces d'évaluateurs</title>
</head>
<body>
<?php include("view/header.php"); ?>

<main>
    <h1 class="title">Espaces évalutateurs</h1>

    <section class="grid">
        <form action="grille.php" method="POST" class="form-group">
            <!---->
            <div class="form-item">
                <input type="text" name="candidat" placeholder="Numéro candidat" required>
            </div>
            <div class="form-name">
                <input type="text" name="name" placeholder="Nom" required>
                <input type="text" name="first-name" placeholder="Prénom" required>
            </div>
            <!---->
            <h4>Bac</h4>
            <div class="form-item radio" style=" display:flex;gap: 32px;" required>
                <div>
                    <label for="">PRO</label>
                    <input type="radio" name="Bac" style="width: auto;" value="PRO" required>
                </div>

                <div>
                    <label for="">S/ES</label>
                    <input type="radio" name="Bac" style="width: auto;" value="S/ES" required>
                </div>

                <div>
                    <label for="">L</label>
                    <input type="radio" name="Bac" style="width: auto;" value="L" required>
                </div>
                <div>
                    <label for="">STMG</label>
                    <input type="radio" name="Bac" style="width: auto;" value="STMG" required>
                </div>
                <div>
                    <label for="">Autres</label>
                    <input type="radio" name="Bac" style="width: auto;" value="Autres" required>
                </div>
            </div>
            <!---->
            <h4>Travail sérieux</h4>
            <div class="form-item radio" style=" display:flex;gap: 32px">
                <label for="">Oui</label>
                <input type="radio" name="Travail" style="width: auto;" value="Oui" required>

                <label for="">Non</label>
                <input type="radio" name="Travail" style="width: auto;" value="Non" required>

            </div>
            <!---->
            <h4>Absence</h4>
            <div class="form-item radio" style=" display:flex;gap: 32px">
                <label for="">Oui</label>
                <input type="radio" name="Absence" style="width: auto;" value="Oui" required>

                <label for="">Non</label>
                <input type="radio" name="Absence" style="width: auto;" value="Non" required>
            </div>
            <!---->
            <h4>Attidue/Comportement</h4>
            <div class="form-item radio" style=" display:flex;gap: 32px">
                <label for="">Oui</label>
                <input type="radio" name="Comportement" style="width: auto;" value="Oui" required>

                <label for="">Non</label>
                <input type="radio" name="Comportement" style="width: auto;" value="Non" required>
            </div>
            <h4>Etude supérieure</h4>
            <div class="form-item radio" style=" display:flex;gap: 32px">
                <label for="">Oui</label>
                <input type="radio" name="EtudeSUP" style="width: auto;" value="Oui" required>

                <label for="">Non</label>
                <input type="radio" name="EtudeSUP" style="width: auto;" value="Non" required>
            </div>
            <h4>Avis PP</h4>
            <div class="form-item radio" style=" display:flex;gap: 32px">
                <label for="">B</label>
                <input type="radio" name="AvisPP" style="width: auto;" value="B" required>

                <label for="">AB</label>
                <input type="radio" name="AvisPP" style="width: auto;" value="AB" required>

                <label for="">Insuf.</label>
                <input type="radio" name="AvisPP" style="width: auto;" value="Insuf." required>
                <label for="">Négatif</label>
                <input type="radio" name="AvisPP" style="width: auto;" value="Négatif" required>
            </div>
            <h4>Avis Proviseur</h4>
            <div class="form-item radio" style=" display:flex;gap: 32px">
                <label for="">B</label>
                <input type="radio" name="AvisProviseur" style="width: auto;" value="B" required>

                <label for="">AB</label>
                <input type="radio" name="AvisProviseur" style="width: auto;" value="AB" required>

                <label for="">Insuf.</label>
                <input type="radio" name="AvisProviseur" style="width: auto;" value="Insuf." required>
                <label for="">Négatif</label>
                <input type="radio" name="AvisProviseur" style="width: auto;" value="Négatif" required>
            </div>
            <h4>Lettre motivation</h4>
            <div class="form-item radio" style=" display:flex;gap: 32px">
                <label for="">B</label>
                <input type="radio" name="LM" style="width: auto;" value="B" required>

                <label for="">AB</label>
                <input type="radio" name="LM" style="width: auto;" value="AB" required>

                <label for="">Insuf.</label>
                <input type="radio" name="LM" style="width: auto;" value="Insuf." required>
                <label for="">Négatif</label>
                <input type="radio" name="LM" style="width: auto;" value="Négatif" required>
            </div>
            <div class="form-item">
                <h4>Remarque(s)</h4>
                <label for=""></label>
                <textarea name="Remarque" id="" cols="30" rows="0" required></textarea>
            </div>
            <!---->
            <div class="form-item submit">
                <input class="btn" type="submit" name="submit" value="Envoyer">
            </div>
            <!---->
        </form>
    </section>
</main>
</body>
</html>