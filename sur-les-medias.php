<?php
    $couleur_bulle_classe = "rouge";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUR LES MEDIAS - CY Cergy Paris Université </title>
    <link rel="icon" href="ressources/images/favicon-GEC_400x400px.png" type="image/x-icon">

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">

    <link rel="stylesheet" href="sur-les-medias.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
</head>

<body>
    <section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php'); ?>

        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        <main class="conteneur-principal">
          <h1 class="titre-page">Les actualités et les évènements important du BUT et de l'IUT CY Paris Université dans les médias.</h1>

            <ul class="liste-videos">
                <li class="video-conteneur">
                    <h2 class="titre">La nouvelle réforme : le BUT MMI</h2>
                    <iframe class="video-yt" height="388" src="https://www.youtube.com/embed/oiEbQF7qfBU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </li>
                <li class="video-conteneur">
                    <h2 class="titre">Pourquoi étudier à l'IUT CYU ?</h2>
                    <iframe class="video-yt" height="388" src="https://www.youtube.com/embed/SyjF4h2Zb7Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </li>
                <li class="video-conteneur">
                    <h2 class="titre">Job interview en anglais au département MMI</h2>
                    <iframe class="video-yt" height="388" src="https://www.youtube.com/embed/t72pdxpNjyc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </li>
                <li class="video-conteneur">
                    <h2 class="titre">L'importance de l'IUT dans les études supérieures</h2>
                    <iframe class="video-yt" height="388" src="https://www.youtube.com/embed/xD4wshE0hEg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </li>
            </ul>
            <!-- à continuer ici. Mettre le code respectif de chaque page ici -->
        </main>
    </section>
    <?php require_once('./ressources/includes/footer.php'); ?>
</body>

</html>