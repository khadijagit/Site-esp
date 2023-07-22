<!-- profile.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Profil</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>

    <?php
    include 'navbar.php';
    session_start();
    if (isset($_SESSION['user_id'])) {
        require_once 'config.php';
        require_once 'controllers/UsersController.php';

        $userId = $_SESSION['user_id'];
        $usersController = new UsersController();
        $utilisateur = $usersController->readUser($userId);

        echo '<h1>Profil de l\'utilisateur</h1>';
        echo '<p>Nom : ' . $utilisateur['nom'] . '</p>';
        echo '<p>Email : ' . $utilisateur['email'] . '</p>';
    } else {
        echo '<p>Vous n\'êtes pas connecté.</p>';
    }
    ?>

</body>
</html>
