<?php
// Démarrer la session au début du script
session_start(); 

// Connexion à la bdd
function connectDB(){
    $host = 'localhost';
    $dbname = 'lpva';
    $login = 'root';
    $mdp = '';
    return new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $login, $mdp);
}

// récup derniers articles
$req = connectDB()->prepare("SELECT * FROM `article` ORDER BY `article_birth`");
$req->execute();
$reponses = $req->fetchAll(PDO::FETCH_ASSOC);

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
</head> <body>

    <!--SECTION ONE-->
    <div class="sectionOneBlog vwFull ble">
        <?php include "nav.html" ?>
        <h1 class="blanc centerText">Le blog</h1>
    </div>

    <!--FILTRES BLOG-->
    <div class="filtresBlog">
        <a class="centerText inter navButton classButton fondNoir bd22 blanc">Tous les articles</a>
        <a class="centerText inter navButton classButton fondNoir bd22 blanc">Portugal</a>
        <a class="centerText inter navButton classButton fondNoir bd22 blanc">Conseils</a>
        <a class="centerText inter navButton classButton fondNoir bd22 blanc">Recettes</a>
        <a class="centerText inter navButton classButton fondNoir bd22 blanc">Espagne</a>
    </div>

    <!--ARTICLES-->
    <div class="sectionTwoBlog">
        <?php
            // boucler sur articles
            $count = 0;
            
            foreach($reponses as $reponse) { ?>
        
                <div>
                    <div class="articleCardDesc columnDirection border">
    
                        <!-- boucle trouve image -->
                        <div class="articleCardDescPic background" 
                            style="background-image: url(<?php echo "{$reponse['article_images']}" ?> )">
                        </div>
    
                        <div class="articleCardDescText columnDirection">
                            <p class="date roboto centerText"><?php echo "{$reponse['article_birth']}" ?></p>
                            <h4 class="roboto"><?php echo "{$reponse['article_title']}" ?></h4>

                            <!-- content text -->
                            <p class="articleCardDescription roboto centerText">
                                
                            </p>

                            <!-- button -->
                            <a href="article.php?article_id=<?php echo $reponse['article_id']; ?>" class="centerText inter navButton articleCardDescButton fondNoir bd22 blanc">Lire plus</a>

                        </div>
                    </div>
                </div>    
        <?php 
        $count++; } ?>
    </div>

    <!--NAV-->
<?php include "nav.html" ?> </body> </html>