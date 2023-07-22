<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Articles</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
<?php

// Récupération de l'ID de catégorie depuis l'URL
if (isset($_GET['categorie_id'])) {
    $categorieId = $_GET['categorie_id'];

    // Récupération des articles pour la catégorie spécifiée
    $requeteArticles = $connexion->prepare("SELECT * FROM Article WHERE categorie = :categorie_id");
    $requeteArticles->bindParam(':categorie_id', $categorieId);
    $requeteArticles->execute();
    $articles = $requeteArticles->fetchAll(PDO::FETCH_ASSOC);

    // Charger la vue des articles
    include 'views/articles.php';
} else {
    echo '<p>Aucune catégorie sélectionnée.</p>';
}
?>

</body>
</html>