<?php 

// Connexion à la bdd
function connectDB(){
    $host = 'localhost';
    $dbname = 'lpva';
    $login = 'root';
    $mdp = '';
    return new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $login, $mdp);
}

// FORM ANSWEAR BY IF
if(isset($_POST["inscriptionValider"])){

    // récupère infos
    $email = htmlspecialchars($_POST["email"]);
    $nomUtilisateur = htmlspecialchars($_POST["nomUtilisateur"]);
    $mdpUser = htmlspecialchars($_POST["mdp"]);
    $mdpConfirm = htmlspecialchars($_POST["mdpConfirm"]);

    //vérif si mdp correspond et inscris
    if ($mdpUser === $mdpConfirm){

        // // Hashe mdp
        $hashedMdp = password_hash($mdpUser, PASSWORD_DEFAULT);

        //inscris infos en bdd

        // prepare
        $insertPrepare = connectDB()->prepare("INSERT INTO user( user_email, user_name, user_password)
        VALUES ( :user_email, :user_name, :user_password)");

        // bind param
        $insertPrepare->bindParam(":user_email", $email) ;
        $insertPrepare->bindParam(":user_name", $nomUtilisateur) ;
        $insertPrepare->bindParam(":user_password", $hashedMdp) ;

        // execute
        $insertPrepare->execute();

        // redirige vars page de connexion
        header("Location: vueConnexion.php");
        
    }

    //si les mdp de correspondent pas
    else{
        echo"Les mots de passes ne correspondent pas, revenez en arrière"; 
    }
}

// VISUEL PAGE D'INSCRIPTION PAR ELSE
else{
    //html
    ?><!DOCTYPE html>
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
    
    <body> <?php include "nav.php" ?>
    
        <div class="formContainer columnDirection">
            <h1 class="noir smallH1 centerText">Inscription</h1>
            <form action="" method="post" class="columnDirection">
    
                <label for="email">E-mail</label></br>
                <input type="email" name="email" autofocus class="bd22" required autofocus></br>
    
                <label for="nomUtilisateur">Nom d'utilisateur</label></br>
                <input type="text" name="nomUtilisateur" class="bd22" minlength="3" required></br>
    
                <label for="mdp">Mot de passe</label></br>
                <input type="password" name="mdp" class="bd22" minlength="8" required></br>
    
                <label for="mdpConfirm">Confirmer le mot de passe</label></br>
                <input type="password" name="mdpConfirm" class="bd22" minlength="8" required></br>
    
                <input type="submit" name="inscriptionValider" value="Valider" class="bd22 submit blanc fondNoir">
            </form>
        </div>
<?php include "nav.php" ?> </body> </html> <?php } ?>
