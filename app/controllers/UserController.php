<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Articles</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
<?php

require_once '../config.php';
require_once '../models/UserModel.php';

// app/controllers/UsersController.php

class UsersController {
    // Méthode pour créer un nouvel utilisateur
    public function createUser($nom, $email, $mot_de_passe) {
        $userModel = new UserModel();
        $userModel->createUser($nom, $email, $mot_de_passe);
    }

    // Méthode pour lire les informations d'un utilisateur par son ID
    public function readUser($id) {
        $userModel = new UserModel();
        return $userModel->readUser($id);
    }

    // Méthode pour mettre à jour les informations d'un utilisateur
    public function updateUser($id, $nom, $email) {
        $userModel = new UserModel();
        $userModel->updateUser($id, $nom, $email);
    }

    // Méthode pour supprimer un utilisateur par son ID
    public function deleteUser($id) {
        $userModel = new UserModel();
        $userModel->deleteUser($id);
    }
}

?>

</body>
</html>