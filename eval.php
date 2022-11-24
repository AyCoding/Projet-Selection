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
        <form action="" class="form-group">
            <!---->
            <div class="form-item">
                <input type="text" name="" placeholder="Numéro candidat">
            </div>
            <div class="form-name">
                <input type="text" name="name" placeholder="Nom">
                <input type="text" name="first-name" placeholder="Prénom">
            </div>
            <!---->
            <!-- <div class="form-item">
                <label for=""></label>
                <input type="text" name="first-name" placeholder="">
            </div> -->
            <!---->
            <h4>Bac</h4>
            <div class="form-item radio" style=" display:flex;gap: 32px;">
                <div>
                    <label for="">PRO</label>
                    <input type="radio" name="bac" style="width: auto;">
                </div>

                <div>
                    <label for="">S/ES</label>
                    <input type="radio" name="bac" style="width: auto;">
                </div>

                <div>
                    <label for="">L</label>
                    <input type="radio" name="bac" style="width: auto;">
                </div>
                <div>
                    <label for="">STMG</label>
                    <input type="radio" name="bac" style="width: auto;">
                </div>
                <div>
                    <label for="">Autres</label>
                    <input type="radio" name="bac" style="width: auto;">
                </div>
            </div>
            <!---->
            <h4>Travail sérieux</h4>
            <div class="form-item radio" style=" display:flex;gap: 32px">
                <label for="">Oui</label>
                <input type="radio" name="btn-work" style="width: auto;">

                <label for="">Non</label>
                <input type="radio" name="btn-work" style="width: auto;">
            </div>
            <!---->
            <h4>Absence</h4>
            <div class="form-item radio" style=" display:flex;gap: 32px">
                <label for="">Oui</label>
                <input type="radio" name="Absence" style="width: auto;">

                <label for="">Non</label>
                <input type="radio" name="Absence" style="width: auto;">
            </div>
            <!---->
            <h4>Attidue/Comportement</h4>
            <div class="form-item radio" style=" display:flex;gap: 32px">
                <label for="">Oui</label>
                <input type="radio" name="Comportement" style="width: auto;">

                <label for="">Non</label>
                <input type="radio" name="Comportement" style="width: auto;">
            </div>
            <h4>Etude supérieure</h4>
            <div class="form-item radio" style=" display:flex;gap: 32px">
                <label for="">Oui</label>
                <input type="radio" name="EtudeSUP" style="width: auto;">

                <label for="">Non</label>
                <input type="radio" name="EtudeSUP" style="width: auto;">
            </div>
            <h4>Avis PP</h4>
            <div class="form-item radio" style=" display:flex;gap: 32px">
                <label for="">B</label>
                <input type="radio" name="AvisPP" style="width: auto;">

                <label for="">AB</label>
                <input type="radio" name="AvisPP" style="width: auto;">

                <label for="">Insuf.</label>
                <input type="radio" name="AvisPP" style="width: auto;">
                <label for="">Négatif</label>
                <input type="radio" name="AvisPP" style="width: auto;">
            </div>
            <h4>Avis Proviseur</h4>
            <div class="form-item radio" style=" display:flex;gap: 32px">
                <label for="">B</label>
                <input type="radio" name="AvisProviseur" style="width: auto;">

                <label for="">AB</label>
                <input type="radio" name="AvisProviseur" style="width: auto;">

                <label for="">Insuf.</label>
                <input type="radio" name="AvisProviseur" style="width: auto;">
                <label for="">Négatif</label>
                <input type="radio" name="AvisProviseur" style="width: auto;">
            </div>
            <h4>Lettre motivation</h4>
            <div class="form-item radio" style=" display:flex;gap: 32px">
                <label for="">B</label>
                <input type="radio" name="LM" style="width: auto;">

                <label for="">AB</label>
                <input type="radio" name="LM" style="width: auto;">

                <label for="">Insuf.</label>
                <input type="radio" name="LM" style="width: auto;">
                <label for="">Négatif</label>
                <input type="radio" name="LM" style="width: auto;">
            </div>
            <div class="form-item">
                <h4>Remarque(s)</h4>
                <label for=""></label>
                <textarea name="" id="" cols="30" rows="0"></textarea>
            </div>
            <!---->
            <div class="form-item submit">
                <input class="btn" type="submit" value="Envoyer">
            </div>
            <!---->
        </form>
    </section>
</main>
</body>
</html>