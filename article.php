<?php
    // démarrer la session
    session_start();

    // Connexion à la bdd
    function connectDB(){
        $host = 'localhost';
        $dbname = 'lpva';
        $login = 'root';
        $mdp = '';
        return new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $login, $mdp);
    }
    
    // récup article id et envoie article correspondant
    $article_id = isset($_GET["article_id"]) ? intval($_GET["article_id"]) : 0;
    
    $req = connectDB()->prepare("SELECT * FROM `article` WHERE article_id=:article_id"); 

    $req->execute(array("article_id" => $article_id));

    $reponse = $req->fetch(PDO::FETCH_ASSOC);

//VISUEL PAGE article
?>
<!DOCTYPE html> <html lang="fr"> 
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
        <title><?php echo $reponse['article_title']; ?></title>
    </head>
    
    <!-- CONTENU -->
    <div class="connexionBody columnDirection vhFull">
        <div class="sectionOneBlog vwFull columnDirection">
            <?php include "nav.html" ?>
            <!-- IMAGE RECUPEREE EN BDD -->
            <img src="
                <?php echo isset($reponse['article_images']) ? $reponse['article_images'] : "https://www.codeur.com/blog/wp-content/uploads/2019/05/corriger-erreur-404-740x447.jpg"; ?>
            " alt="Tram dans une rue de Lisbonne." class="vwFull sectionOneBlog">
        </div>

        <!-- VERIF SI ARTICLE CONTIENT CONTENU -->
        <?php if (isset($reponse['article_title'], $reponse['article_intro'], $reponse['article_content'])) { ?>
        
            <!-- TITRE RECUPERE EN BDD -->
            <h1 class="noir centerText smallH1">
                <?php echo isset($reponse['article_title']) ? $reponse['article_title'] : "Titre manquant"; ?>
            </h1>
    
            <!--INTRO RECUPERE EN BDD -->
            <div class="intro w75 bdLeft">
                <p>
                    <?php echo isset($reponse['article_intro']) ? $reponse['article_intro'] : "Intro manquante"; ?>
                </p>
            </div>
    
            <!--MAIN CONTAINT RECUPERE EN BDD-->
            <div class="articleContent w75 columnDirection">
                <?php echo isset($reponse['article_content']) ? $reponse['article_content'] : "Contenu manquant :s"; ?>
            </div>
    
        <!-- SINON : MAIN CONTENT ADAPTE -->
        <?php } else { ?>
            <a href="vueHome.php">Désolé, cette page n'existe pas .. Retournez à l'accueil</a>
<?php } include "nav.html"; ?> </body> </html>