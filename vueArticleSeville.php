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
<body class="connexionBody columnDirection vhFull">

    <!--SECTION ONE-->
    <div class="sectionOneBlog vwFull columnDirection">
        <?php include "nav.html" ?>
        <img src="Séville.jpg" alt="arche donnant vue sur Séville" class="vwFull sectionOneBlog">
    </div>

    <h1 class="noir centerText smallH1">Séville : Un Voyage dans l'Âme Andalouse</h1>

    <!--INTRO-->
    <div class="intro">
        <p>Séville, joyau de l'Andalousie, est une ville qui captive les âmes avec son charme envoûtant et son ambiance vibrante. Nichée le long des rives du Guadalquivir, Séville regorge de trésors à découvrir, des ruelles sinueuses aux palais somptueux en passant par les délices culinaires qui ravissent les papilles.</p>
    </div>

    <!--MAIN CONTAINT-->
    <div class="articleContent columnDirection">
        <div>
            <h3 class="centerText noir">Découverte des Ruelles Pittoresques</h3>
            <p class="centerText">Lorsque vous arpentez les rues de Séville, vous êtes transporté dans un monde où le passé et le présent se mêlent harmonieusement. Les ruelles étroites du quartier juif, avec leurs murs blanchis à la chaux et leurs balcons fleuris, vous invitent à flâner et à découvrir les secrets cachés de la ville.</p>
        </div>
    
        <div>
            <h3 class="centerText noir">Exploration des Palais Majestueux</h3>
            <p class="centerText">Les palais somptueux de Séville, tels que l'Alcazar et la Casa de Pilatos, témoignent de la grandeur passée de la ville et de son héritage mauresque. En vous promenant dans leurs jardins luxuriants et leurs salles magnifiquement décorées, vous vous imprégnez de l'histoire et de la beauté de l'Andalousie.</p>
        </div>
    
        <div>
            <h3 class="centerText noir">Dégustation des saveurs Andalouses</h3>
            <p class="centerText">Mais ce n'est pas seulement l'architecture qui fait le charme de Séville, c'est aussi sa cuisine délicieusement ensoleillée. Des tapas traditionnelles aux saveurs exotiques aux desserts sucrés comme le célèbre flan de la ville, chaque bouchée est une explosion de goûts et de sensations qui vous transporte au cœur de la culture andalouse.</p>
        </div>
        
        <!--CONCLUSION-->
        <div>
            <h2 class="centerText noir">Conclusion</h2>
            <p class="centerText">En explorant Séville, vous plongez dans l'âme même de l'Andalousie, où la passion, la joie de vivre et la convivialité sont omniprésentes. Laissez-vous séduire par la magie de cette ville inoubliable et partez à la découverte de ses trésors cachés qui vous laisseront des souvenirs impérissables.</p>
        </div>
        <!-- divs vides pour espacer le conclusion de la suite-->
        <div></div>
        <div></div>
    </div>
    
    <?php include "nav.html" ?>
</body>
</html>