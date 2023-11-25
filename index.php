<?php
    $couleur_bulle_classe = "rose";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - CY Cergy Paris Université</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="icon" href="ressources/images/favicon-GEC_400x400px.png" type="image/x-icon">

    <!-- Vous n'avez pas besoin de fichiers sur les autres pages. Ca allège le temps de chargement et diminue la consommation d'électricité -->
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-accueil.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">

</head>
<body>
    <section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php'); ?>

        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        <main class="conteneur-principal">
            <h1 class="titre-page">Articles sur le BUT MMI</h1>

            <section class="colonne">
               
                <section class="liste-articles">

                <article class="article">
                <img src="ressources/images/le-but-mmi.jpg" alt="">
            <div class="textes-article">
                <h2 class="titre-article">Le Festival MMI</h2>
                <p class="description-article">Avis à tous les étudiants MMI de France
Viens prouver ton talent au Festival MMI jusqu'au 12 mai 2023 ! Inscris-toi et poste ton meilleur travail afin de remporter cette édition. Cela peut être un travail de cours ou un travail personnel, peu importe, tant que cela rentre dans une des catégories.</p>
                <a href="article1.php" class="en-savoir-plus">En savoir plus</a>

            </div>
        </article>
        
        <article class="article">
        <img src="ressources/images/le-but-mmi.jpg" alt="">
            <div class="textes-article">
                <h2 class="titre-article">Rejoins le BUT MMI : La voie vers un avenir digital prometteur ! </h2>
                <p class="description-article">Hey toi, jeune passionné du numérique ! Tu cherches une formation qui combine créativité, innovation et opportunités professionnelles ? Ne cherche plus ! Le BUT MMI (Métiers du Multimédia et de l'Internet) est la voie idéale pour toi. Dans cet article, je vais te présenter les raisons convaincantes pour lesquelles tu devrais impérativement rejoindre cette formation. Prépare-toi à embrasser un avenir digital prometteur et passionnant !</p>
                <a href="article2.php" class="en-savoir-plus">En savoir plus</a>

            </div>
        </article>

                    
                </section>   
                <a class="jpo-banniere" title="Ouverture dans un nouvel onglet" target="_blank" href="https://www.cyu.fr/salons-journee-portes-ouvertes">
                    <img src="ressources/images/logo-cyu-blanc.png" alt="logo-cyu" class="logo-cergy">

                    <section class="textes">
                        <p class="txt-petit">Journée portes ouvertes</p>
                        <p class="txt-grand">
                            11/02/2023, <br />
                            de 10h à 17h
                        </p>
                        <p class="en-savoir-plus">EN SAVOIR PLUS</p>
                    </section>
                </a>
            </section>
        </main>

    </section>
    <?php require_once('./ressources/includes/footer.php'); ?>
</body>

</html>