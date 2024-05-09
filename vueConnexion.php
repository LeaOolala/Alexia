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

<body class="connexionBody columnDirection vhFull"> <?php include "nav.html" ?>

    <div class="formContainer columnDirection">
        <h1 class="noir smallH1 centerText">Inscription</h1>
        <form action="" method="post" class="columnDirection">

            <label for="email">E-mail</label></br>
            <input type="email" name="email" autofocus class="bd22"></br>

            <label for="mdpConnexion">Mot de passe</label></br>
            <input type="password" name="mdpConnexion" class="bd22"></br>

            <p class="centerText">Pas encore de compte ? <a href="">Inscrivez-vous ici</a></p>

            <input type="submit" name="connexion" value="Connexion" class="bd22 submit blanc fondNoir">
        </form>
    </div>
    
<?php include "nav.html" ?> </body> </html>