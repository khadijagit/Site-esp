<?php

$serveur = "localhost";
$utilisateur = "mglsi_user";
$mot_de_passe = "passer";
$base_de_donnees = "mglsi_news";
$connexion = new PDO("mysql:host=$serveur;dbname=$base_de_donnees", $utilisateur, $mot_de_passe);

// Créer la table "utilisateurs" si elle n'existe pas déjà
$requeteCreateTable = "CREATE TABLE IF NOT EXISTS utilisateurs (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL
)";

$connexion->exec($requeteCreateTable);
?>
