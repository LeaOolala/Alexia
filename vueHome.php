<?php
function connectDB(){
    $host = 'localhost';
    $dbname = 'lpva';
    $login = 'root';
    $mdp = '';
    return new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $login, $mdp);
}

// récup trois derniers articles
$req = connectDB()->prepare("SELECT * FROM `article` ORDER BY `article_birth` DESC LIMIT 3");
$req->execute();
$reponse = $req->fetchAll(PDO::FETCH_ASSOC);

//html
?><!DOCTYPE html><html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Vue Composant</title>
</head>

<body>

    <!-- SECTION UN-->
    <div class="sectionOneHome columnDirection">
        <?php include "nav.html" ?>
        <h1 class="blanc centerText headerImage">Les petits voyages d'Alexia</h1>
    </div>

    <!--DERNIERS ARTICLES-->
    <div class="sectionTwoHome columnDirection">
        <h2 class="noir centerText">Derniers articles</h2>
        <div class="homeCardsContainer">

        <!-- boucle template article *3  -->
        <?php
        for ($count = 0; $count <= 2; $count++) { ?>

            <!-- récup image depuis bdd -->
            <div class="articleCardPic columnDirection" style="background:url(<?php echo $reponse[$count]['article_images']; ?>); background-size: cover;">
                <div class="articleCardPicText columnDirection">
                    <p class="roboto articleCardPicDate blanc centerText"></p>
                    <p class="roboto articleCardPicTitle blanc centerText">
                        <!-- récup titre article depuis bdd -->
                        <?php echo $reponse[$count]['article_title']; ?>
                    </p>
                    <a href="article.php?article_id=<?php echo $reponse[$count]['article_id']; ?>" class="inter articleCardPicButton centerText fondBlanc noir">Lire plus</a>
                </div>
            </div>
    <?php } ?> </div> </div>

    <!--DESTINATIONS-->
    <div class="sectionTroisHome columnDirection">
        <h2 class="noir centerText">Destinations</h2>
        <div class="destination">
            <div class="destinationPic chateau">
            </div>
            <div class="destinationText columnDirection">
                <h3 class="noir centerText">Espagne</h3>
                <p class="destinationP centerText">
                    Découvrez l'Espagne, une destination ensoleillée aux mille couleurs et saveurs, où chaque coin
                    révèle une nouvelle aventure.
                </p>
                <a class="inter navButton centerText bd22 blanc fondNoir">Voir</a>
            </div>
        </div>
        <div class="destination destinationPortugal mB90">
            <div class="destinationPic piscine">
            </div>
            <div class="destinationText columnDirection">
                <h3 class="noir centerText">Portugal</h3>
                <p class="destinationP centerText">
                    Plongez dans l'atmosphère envoûtante du Portugal, où l'histoire et la beauté se retrouvent pour
                    offrir une expérience de voyage incomparable.
                </p>
                <a class="inter navButton centerText bd22 blanc fondNoir">Voir</a>
            </div>
        </div>
    </div>

    <!--RECETTES-->
    <div class="sectionQuatreHome columnDirection paella">
        <h2 class="blanc centerText">Recettes</h2>
        <div class="recetteText columnDirection">
            <p class="noir spacedP centerText">
                Découvrez la section "Recettes d'Ailleurs", un voyage culinaire à travers le monde où chaque plat
                raconte une histoire, révélant les saveurs uniques et les traditions culinaires de différentes cultures.
                Laissez vous emporter par des recettes authentiques et exotiques qui éveilleront vos papilles à de
                nouveaux horizons gastronomiques.
            </p>
            <a class="inter navButton centerText blanc recetteButton fondNoir">Voir les recettes</a>
        </div>
    </div>

    <!--ORGANISATION-->
    <div class="sectionCinq">
        <div class="gallerie"></div>
        <div class="destinationText columnDirection">
            <h2 class="noir centerText">Organisation</h2>
            <p class="destinationText columnDirection centerText">
                Découvrez notre section "Conseils", votre compagnon idéal pour planifier des aventures sans stress.
                Trouvez des astuces pratiques, des conseils d'experts et des ressources utiles pour faciliter chaque
                étape de votre voyage, de la planification à la réalisation de souvenirs inoubliables.
            </p>
            <a class="inter navButton centerText bd22 blanc fondNoir">Voir les conseils</a>
        </div>
    </div>

    <!--A PROPOS-->
    <div class="destination mB90">
        <div class="destinationPic about">
        </div>
        <div class="destinationText columnDirection">
            <h3 class="noir centerText">A propos</h3>
            <p class="destinationP centerText">
                Je suis Alexia, 22 ans, une aventurière passionnée qui explore l'Europe avec sa famille et son fiancé,
                avide de découvertes et de moments inoubliables.
            </p>
            <a href="vueAPropos.php" class="inter navButton centerText bd22 blanc fondNoir">Lire plus</a>
        </div>
    </div>

    <!--NAV-->
    <?php include "nav.html" ?>
</body>

</html>