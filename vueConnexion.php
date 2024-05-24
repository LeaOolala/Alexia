<?php
// Démarrer la session au début du script
session_start() ;

// Connexion à la bdd
function connectDB(){
    $host = 'localhost';
    $dbname = 'lpva';
    $login = 'root';
    $mdp = '';
    return new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $login, $mdp);
}

// FORM ANSWEAR BY IF
if(isset($_POST["connexion"])){
    $email = htmlspecialchars($_POST["email"]);
    $mdpConnexion= htmlspecialchars($_POST["mdpConnexion"]); 

    // CHERCHE MDP BDD
    $hashedMdp = connectDB()->prepare("SELECT user_password FROM `user` WHERE user_email = :user_email");
    // bind param
    $hashedMdp->bindParam(":user_email", $email) ;
    // execute
    $hashedMdp->execute();
    $hashedMdpUserDb = $hashedMdp->fetch(PDO::FETCH_ASSOC);

    // test
    // echo $hashedMdpUserDb["user_password"];
    // echo"<hr>";
    // print_r($mdpConnexion);


    // VERIF MDP
    if (password_verify($mdpConnexion,$hashedMdpUserDb["user_password"])) {


        // Mot de passe valide, stocke les informations dans la session
        $_SESSION['user_password'] = $hashedMdpUserDb["user_password"];
        $_SESSION['user_email'] = $email;

        //cherche user name
        $nomUtilisateurPrep = connectDB()->prepare("SELECT user_name FROM user WHERE user_email = :user_email ");
        // bind param
        $nomUtilisateurPrep->bindParam(":user_email", $email) ;
        // execute
        $nomUtilisateurPrep->execute();
        // fetch
        $nomUtilisateur = $nomUtilisateurPrep->fetch(PDO::FETCH_ASSOC);
        // récup user name pour plus tard
        $_SESSION['user_name'] = $nomUtilisateur["user_name"];

        // test
        echo 'Password is valid!';
        
        // Redirection vers la page d'espace personnel
        header("Location: vueEspacePerso.php");
        exit();
    } 
    else {
        echo 'Invalid password.';
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
    
    <body class="connexionBody columnDirection vhFull"> <?php include "nav.php" ?>
    
        <div class="formContainer columnDirection">
            <h1 class="noir smallH1 centerText">Connexion</h1>
            <form action="vueConnexion.php" method="post" class="columnDirection">
    
                <label for="email">E-mail</label></br>
                <input type="email" name="email" autofocus class="bd22"></br>
    
                <label for="mdpConnexion">Mot de passe</label></br>
                <input type="password" name="mdpConnexion" class="bd22"></br>
    
                <p class="centerText">Pas encore de compte ? <a href="vueInscription.php ">Inscrivez-vous ici</a></p>
    
                <input type="submit" name="connexion" value="Connexion" class="bd22 submit blanc fondNoir">
            </form>
        </div>
        
<?php include "nav.php" ?> </body> </html><?php } ?>