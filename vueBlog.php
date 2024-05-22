<?php

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
            foreach($reponses as $reponse) {?>
        
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
                            <a href="vueArticleSeville.php" class="centerText inter navButton articleCardDescButton fondNoir bd22 blanc">Lire plus</a>
                        </div>
                    </div>
                </div>    
        <?php } ?>
    </div>

    <!-- <div class="sectionTwoBlog">
        <div class="articleCardDesc columnDirection border">
            <div class="articleCardDescPic seville"></div>
            <div class="articleCardDescText columnDirection">
                <p class="date roboto centerText">11 avril 2024</p>
                <h4 class="roboto centerText">Séville : Un Voyage dans l'Âme Andalouse</h4>
                <p class="articleCardDescription roboto centerText">
                    Séville, joyau de l'Andalousie, est une ville qui captive les âmes avec son charme envoûtant et son ambiance vibrante. Nichée le long des rives ...
                </p>
                <a href="vueArticleSeville.php" class="centerText inter navButton articleCardDescButton fondNoir bd22 blanc">Lire plus</a>
            </div>
        </div>

        <div class="articleCardDesc columnDirection border">
            <div class="articleCardDescPic lisbonne"></div>
            <div class="articleCardDescText columnDirection">
                <p class="date roboto centerText">1 avril 2024</p>
                <h4 class="roboto centerText">Explorez les Trésors Cachés de Lisbonne</h4>
                <p class="articleCardDescription roboto centerText">Lorsque l'on évoque Lisbonne, on pense souvent à ses célèbres attractions touristiques telles que le quartier de l'Alfama, le château...</p>
                <a href="vueArticleLisbonne.php"class="centerText inter navButton articleCardDescButton fondNoir bd22 blanc">Lire plus</a>
            </div>
        </div>
        <div class="articleCardDesc columnDirection border">
            <div class="articleCardDescPic map"></div>
            <div class="articleCardDescText columnDirection">
                <p class="date roboto centerText">25 mars 2024</p>
                <h4 class="roboto centerText">Comment planifier un road trip inoubliable en Europe</h4>
                <p class="articleCardDescription roboto centerText">
                Un road trip à travers l'Europe est une aventure inoubliable qui vous permet de découvrir une multitude de paysages, de cultures et de...
                </p>
                <a href="vueArticleRoadtrip.php" class="centerText inter navButton articleCardDescButton fondNoir bd22 blanc">Lire plus</a>
            </div>
        </div>
        <div class="articleCardDesc columnDirection border">
            <div class="articleCardDescPic backpack"></div>
            <div class="articleCardDescText columnDirection">
                <p class="date roboto centerText">17 avril 2024</p>
                <h4 class="roboto centerText">Astuces pour voyager léger et efficacement</h4>
                <p class="articleCardDescription roboto centerText">
                    Voyager léger est la clé pour profiter pleinement de chaque instant de votre aventure. Voici 10 astuces pratiques pour optimiser votre sac à dos et...
                </p>
                <a href="vueArticleVoyagerLeger.php" class="centerText inter navButton articleCardDescButton fondNoir bd22 blanc">Lire plus</a>
            </div>
        </div>
        <div class="articleCardDesc columnDirection border">
            <div class="articleCardDescPic paella"></div>
            <div class="articleCardDescText columnDirection">
                <p class="date roboto centerText">30 avril 2024</p>
                <h4 class="roboto centerText">Paëlla espagnole traditionnelle</h4>
                <p class="articleCardDescription roboto centerText">
                    La paëlla espagnole est bien plus qu'un simple plat ; c'est un symbole de la cuisine méditerranéenne, un festin de saveurs qui évoque les chaudes journées ensoleillées et les repas conviviaux en famille.
                </p>
                <a href="vueArticlePaella.php" class="centerText inter navButton articleCardDescButton fondNoir bd22 blanc">Lire plus</a>
            </div>
        </div>
        <div class="articleCardDesc columnDirection border">
            <div class="articleCardDescPic algarve"></div>
            <div class="articleCardDescText columnDirection">
                <p class="date roboto centerText">10 mai 2024</p>
                <h4 class="roboto centerText">Les falaises dorées de l'Algarve </h4>
                <p class="articleCardDescription roboto centerText">
                L'Algarve, cette région enchanteresse située au sud du Portugal, est bien plus qu'une simple destination de vacances. C'est un véritable paradis pour les amoureux de la nature,...
                </p>
                <a href="vueArticleAlgarve.php" class="centerText inter navButton articleCardDescButton fondNoir bd22 blanc">Lire plus</a>
            </div>
        </div>
    </div> -->

    <!--NAV-->
<?php include "nav.html" ?> </body> </html>