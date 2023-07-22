<!-- deleteAccount_process.php -->

<?php
require_once 'config.php';
require_once 'controllers/UsersController.php';

session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];

    $usersController = new UsersController();
    $usersController->deleteUser($userId);

    // Déconnexion de l'utilisateur en détruisant la session
    session_destroy();

    // Redirection vers une page appropriée après la suppression du compte
    header("Location: index.php");
    exit;
}
?>
