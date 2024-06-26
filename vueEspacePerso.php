<?php
// Démarrer la session au début du script
session_start() ;

// avant tout, si pas connecté, renvoie page de connexion
if (!isset($_SESSION['user_name'])){
    header('Location: vueConnexion.php');
}

// Connexion à la bdd
function connectDB(){
    $host = 'localhost';
    $dbname = 'lpva';
    $login = 'root';
    $mdp = '';
    return new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $login, $mdp);
}
//DECONNEXION
function deconnexion()
{
    if (isset($_SESSION['user_name'])) {
        session_unset();
        session_destroy();
        setcookie(session_name(), '', time() - 3600, '/');  // Unset le cookie
    }

    // header('Location:' . "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["PHP_SELF"]);
    header('Location: vueHome.php'); // Redirect to site root (adjust if needed)
    exit();
}
if (isset($_GET['deconnexion'])){
    deconnexion();
}


//VISUEL PAGE ESPACE PERSO
?>
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

<!-- HEADER-->
<body class="connexionBody columnDirection"> <?php include "nav.php" ?>
    <div class="espacePerso">

        <!--DROITE-->
        <div class=" liGap espacePDroite columnDirection pg50">
            <h1 class="smallH1 noir centerText pg43">Espace perso</h1>
            <!--TABLE-->
            <table class="border commentTable">

                <!--header-->
                <tr class="fondNoir commentTable">
                    <th colspan="2" class="blanc roboto">Historique de tes commentaires</th>
                </tr>

                <!--COMMENT ONE-->
                <tr class="commentTable pg0">
                    <td class="roboto date">13-04</td>
                    <td class="rightText crayon"><img src="crayon.svg" alt="modifier"></td>
                </tr>
                <tr class="commentTable pg0">
                    <td colspan="2" class="roboto">
                        Blabla bla bla 
                    </td>
                </tr>

                <!--COMMENT TWO-->
                <tr class="commentTable fondGris pg0">
                    <td class="roboto date">20-04</td>
                    <td class="rightText crayon"><img src="crayon.svg" alt="modifier"></td>
                </tr>
                <tr class="commentTable fondGris pg0">
                    <td colspan="2" class="roboto">
                        Tata
                    </td>
                </tr>
                
                <!--COMMENT THREE-->
                <tr class="commentTable pg0">
                    <td class="roboto date pg0">02-04</td>
                    <td class="rightText crayon pg0"><img src="crayon.svg" alt="modifier"></td>
                </tr>
                <tr class="commentTable pg0">
                    <td colspan="2" class="roboto">
                    Et les melons qui viennent d’Espagne en plein Décembre, c’est beau HEIN !
                    </td>
                </tr>
            </table>
            <form action="vueEspacePerso.php" class="navButton" method="get"><input type="submit" name="deconnexion" value="deconnexion" class="centerText inter navButton classButton fondNoir bd22 blanc" ></form>

        </div>
        
        <!--GAUCHE-->
        <div class="liGap espacePGauche h84 pg50 columnDirection">
            <img src="profilePic.jpg" alt="photo de profil" class="espacePPic bd22 border">

            <!--TABLE-->
            <table class="border">
                <tr class="fondNoir">
                    <th colspan="2" class="blanc roboto">Tes informations :</th>
                </tr>

                <!--nom utilisateur-->
                <tr class="fondGris">
                    <td colspan="2" class="roboto">nom d'utilisateur :</td>
                </tr>
                <tr>
                    <td class="roboto"><?php echo "{$_SESSION['user_name']}" ?></td>
                    <td class="rightText crayon"><img src="crayon.svg" alt="modifier"></td>
                </tr>

                <!--mail-->
                <tr class="fondGris">
                    <td colspan="2" class="roboto">adresse-mail :</td>
                </tr>
                <tr>
                    <td class="roboto"><?php echo "{$_SESSION["user_email"]}" ?></td>
                    <td class="rightText crayon"><img src="crayon.svg" alt="modifier"></td>
                </tr>

                <!--mdp-->
                <tr class="fondGris">
                    <td colspan="2" class="roboto">mot de passe :</td>
                </tr>
                <tr>
                    <td class="roboto">****</td>
                    <td class="rightText crayon"><img src="crayon.svg" alt="modifier"></td>
                </tr>
            </table>

</div></div>
<?php include "nav.php" ?> </body> </html>