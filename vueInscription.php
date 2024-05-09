<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Vue Composant</title>
</head>

<body> <?php include "nav.html" ?>

    <div class="formContainer columnDirection">
        <h1 class="noir smallH1 centerText">Inscription</h1>
        <form action="" method="post" class="columnDirection">

            <label for="email">E-mail</label></br>
            <input type="email" name="email" autofocus class="bd22"></br>

            <label for="nomUtilisateur">Nom d'utilisateur</label></br>
            <input type="text" name="nomUtilisateur" class="bd22"></br>

            <label for="mdp">Mot de passe</label></br>
            <input type="password" name="mdp" class="bd22"></br>

            <label for="mdpConfirm">Confirmer le mot de passe</label></br>
            <input type="text" name="mdpConfirm" class="bd22"></br>

            <input type="submit" name="inscriptionValider" value="Valider" class="bd22 submit blanc fondNoir">
        </form>
    </div>
<?php include "nav.html" ?> </body> </html>