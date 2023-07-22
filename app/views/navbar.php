<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Articles</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <?php
        // Récupération des catégories
        $requeteCategories = $connexion->query("SELECT * FROM Categorie");
        $categories = $requeteCategories->fetchAll(PDO::FETCH_ASSOC);

        // Affichage de la navbar avec les catégories
        echo '<h1> ACTUALITES POLYTECHNICIENNES </h1>';
        echo '<nav>';
        echo '<ul>';
        echo '<li><a href="index.php?page=accueil">Accueil</a></li>';
        foreach ($categories as $categorie) {
            echo '<li><a href="index.php?page=articles&categorie_id=' . $categorie['id'] . '">' . $categorie['libelle'] . '</a></li>';
        }
        echo '</ul>';
        echo '</nav>';
        echo '<h3> Dernieres actualites... </h3>';
    ?>
</body>
</html>