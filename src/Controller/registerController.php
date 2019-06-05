<?php

require dirname(__DIR__, 2) . '/autoload.php';
require dirname(__DIR__) . '/functions/form-functions.php';

// Vérification formulaire + inscription de l'utilisateur en BDD
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errorMessageUsername = checkPostText('username', 128);
    $errorMessageEmail = checkPostText('email', 255);
    $errorMessagePassword = checkPostText('password', 128);

    if (empty($errorMessageUsername) &&
        empty($errorMessageEmail) &&
        empty($errorMessagePassword)
    ) {
        // Il n'y a pas d'erreur, on passe à l'inscription
        $database = new Database();
        $database->connect();

        // On crée un utilisateur en local
        $user = new User();
        $user->setUsername($_POST['username']);
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);

        $query = "INSERT INTO app_user (username, email, password) VALUES (" .
            $user->getStrParamsSQL() .
            ")";

        $success = $database->exec($query);

    }
}