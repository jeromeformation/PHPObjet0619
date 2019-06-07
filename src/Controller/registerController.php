<?php

use src\Entity\User;
use src\Utilities\Database;
use src\Utilities\FormValidator;

require dirname(__DIR__, 2) . '/autoload.php';

// Vérification formulaire + inscription de l'utilisateur en BDD
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errorMessageUsername = FormValidator::checkPostText('username', 128);
    $errorMessageEmail = FormValidator::checkPostText('email', 255);
    $errorMessagePassword = FormValidator::checkPostText('password', 128);

    if (empty($errorMessageUsername) &&
        empty($errorMessageEmail) &&
        empty($errorMessagePassword)
    ) {
        // Il n'y a pas d'erreur, on passe à l'inscription
        $database = new Database();
        // $database->connect(); appelé directement dans le constructeur

        // On crée un utilisateur en local
        $user = new User($_POST['username'], $_POST['email'], $_POST['password']);

        $query = "INSERT INTO app_user (username, email, password) VALUES (" .
            $user->getStrParamsSQL() .
            ")";

        $success = $database->exec($query);

    }
}