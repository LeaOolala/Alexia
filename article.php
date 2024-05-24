<?php

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
    <div class="connexionBody columnDirection">
        <div class="sectionOneBlog vwFull columnDirection">
            <?php include "nav.php" ?>
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
            <div><br></div><div><br></div><div><br></div>

            <!-- COMMENT AREA -->
            <div class="border vwFull pg50 columnDirection"><?php
    
                // FORMULAIRE
                ?><form action="article.php?article_id=<?php echo $article_id; ?>" method="post" class="formContainer gap25">
                    <!-- champ -->
                    <label for="commentContent" style="margin: 0;">Rentrez votre commentaire :</label>
                    <input type="text" name="commentContent" class="bd22" style="margin: 0;" required>
                    <!-- submit -->
                    <input type="submit" name="commenter" value="commenter" class="bd22 submit blanc fondNoir" style="margin: 0; padding: 4px 1px;">
                </form><?php

                // form answear by if : gestion envoi commentaire ATTENTION SI CONNECTE UNIQUEMENT CONTINUE
                if (isset($_POST["commenter"])){
                    echo "Submitted!"; 
                }
            
        ?></div><?php }
    
        // SINON : MAIN CONTENT ADAPTE
         else { ?>
            <a href="vueHome.php">Désolé, cette page n'existe pas... Retournez à l'accueil</a>
<?php } include "nav.php"; ?> </body> </html>