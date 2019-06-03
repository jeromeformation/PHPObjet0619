<?php

require 'form-functions.php';

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
        var_dump("On peut inscrire l'utilisateur");
    } else {
        var_dump("Problème");
    }
}