<!-- signup_process.php -->

<?php
require_once 'config.php';
require_once 'controllers/UsersController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    $usersController = new UsersController();
    $usersController->createUser($nom, $email, $mot_de_passe);

    // Redirection vers la page de profil après l'inscription réussie
    header("Location: profile.php");
    exit;
}
?>
