<?php

class ArticleModel {
    // Méthode pour récupérer tous les articles depuis la base de données
    public function getAllArticles() {
        global $connexion;
        $requeteArticles = $connexion->query("SELECT * FROM Article");
        return $requeteArticles->fetchAll(PDO::FETCH_ASSOC);
    }

    // Méthode pour récupérer les articles pour une catégorie spécifiée
    public function getArticlesByCategory($categorieId) {
        global $connexion;
        $requeteArticles = $connexion->prepare("SELECT * FROM Article WHERE categorie = :categorie_id");
        $requeteArticles->bindParam(':categorie_id', $categorieId);
        $requeteArticles->execute();
        return $requeteArticles->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
