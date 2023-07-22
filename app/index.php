<?php

// Charger le fichier de configuration
require_once 'config.php';

// Vérifier la page demandée dans l'URL
$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

// Charger les contrôleurs appropriés en fonction de la page demandée
switch ($page) {
    case 'accueil':
        require_once 'controllers/AccueilController.php';
        break;
    case 'articles':
        require_once 'controllers/ArticlesController.php';
        break;
    default:
        echo 'Page non trouvée';
}

// Fermeture de la connexion à la base de données
$connexion = null;
?>
