<?php

    // Affichage de la navbar
    include 'navbar.php';

    // Affichage des articles
    foreach ($articles as $article) {
        echo '<h2>' . $article['titre'] . '</h2>';
        echo '<p>' . $article['contenu'] . '</p>';
        echo '<hr>'; // Ligne de séparation entre les articles 
    }
?>
