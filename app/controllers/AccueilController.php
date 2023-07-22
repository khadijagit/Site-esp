<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>

    <?php
   
   // Récupération de tous les articles
   $requeteArticles = $connexion->query("SELECT * FROM Article");
   $articles = $requeteArticles->fetchAll(PDO::FETCH_ASSOC);
   
   // Charger la vue d'accueil
   include 'views/accueil.php';
   ?>
   
</body>
</html>