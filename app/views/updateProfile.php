<!-- updateProfile.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mise à Jour du Profil</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>

    <?php include 'navbar.php'; ?>

    <h1>Mise à Jour du Profil</h1>

    <?php
    session_start();
    if (isset($_SESSION['user_id'])) {
        require_once 'config.php';
        require_once 'controllers/UsersController.php';

        $userId = $_SESSION['user_id'];
        $usersController = new UsersController();
        $utilisateur = $usersController->readUser($userId);

        echo '<form action="updateProfile_process.php" method="post">';
        echo '<label for="nom">Nom :</label>';
        echo '<input type="text" name="nom" value="' . $utilisateur['nom'] . '" required>';

        echo '<label for="email">Email :</label>';
        echo '<input type="email" name="email" value="' . $utilisateur['email'] . '" required>';

        echo '<input type="submit" value="Mettre à jour">';
        echo '</form>';
    } else {
        echo '<p>Vous n\'êtes pas connecté.</p>';
    }
    ?>

</body>
</html>
