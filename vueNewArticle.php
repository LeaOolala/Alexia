<?php
// Connexion à la bdd
function connectDB(){
    $host = 'localhost';
    $dbname = 'lpva';
    $login = 'root';
    $mdp = '';
    return new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $login, $mdp);
}

//HTML
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

<!-- FORM -->
    <form method="post" action="self">
        <fieldset>
            <h2>Nouvel article</h2>

            <!-- TITRE -->
            <label>
                <small >Titre de l'article (entre 5 et 50 caractères)</small>
                <input name="articleTitle" type="text" minlength="5" maxlength="50" required autofocus>
            </label>

        <!-- TYPE -->
        <label><br>
            <small>Choisir le type d'article</small>

            <select required name="articleType" >
                <option value="discover">Découverte</option>
                <option value="tips">Astuce</option>
                <option value="recette">Recette</option>
            </select>
        </label>
        
        <!-- main content -->
        <fieldset>
            <legend>Sections</legend>
            <ul>
                <li>
                    <!-- SOUS TITRE -->
                    <label>
                        <input required name="articleSectionSubtitle" type="text">
                    </label>
                    <!-- CONTENT -->
                    <label>
                        <small>Contenu</small>
                        <textarea required name="articleSectionContent"></textarea>
                    </label>
                    <button type="button" class="removeSectionBtn" title="Supprimer la section">
                        ❌
                    </button>
                </li>
            </ul>
            <button type="button" id="addSectionBtn" title="Ajouter une section">➕</button>
        </fieldset>
    
        <!-- submit -->
        <input name="submit" type="submit" />
</fieldset></form></body></html>