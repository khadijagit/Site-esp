<!-- signup.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>

    <?php include 'navbar.php'; ?>

    <h1>Inscription</h1>

    <form action="signup_process.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required>

        <label for="email">Email :</label>
        <input type="email" name="email" required>

        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" name="mot_de_passe" required>

        <input type="submit" value="S'inscrire">
    </form>

</body>
</html>
