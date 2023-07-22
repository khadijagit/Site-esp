<!-- deleteAccount.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Suppression du Compte</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>

    <?php include 'navbar.php'; ?>

    <h1>Suppression du Compte</h1>

    <?php
    session_start();
    if (isset($_SESSION['user_id'])) {
        echo '<p>Êtes-vous sûr de vouloir supprimer votre compte ?</p>';
        echo '<form action="deleteAccount_process.php" method="post">';
        echo '<input type="submit" name="confirmer" value="Confirmer">';
        echo '</form>';
    } else {
        echo '<p>Vous n\'êtes pas connecté.</p>';
    }
    ?>

</body>
</html>
