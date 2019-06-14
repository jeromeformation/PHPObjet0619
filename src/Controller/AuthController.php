<?php
namespace src\Controller;

session_start();

use src\Entity\User;
use src\Utilities\Database;
use src\Utilities\FormValidator;

class AuthController
{
    /**
     * Vérifiants les identifiants et connecte l'utilisateur
     * @return array
     */
    public function connect(): array
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $errorMessageEmail = FormValidator::checkPostText('email', 255);
            $errorMessagePassword = FormValidator::checkPostText('password', 128);

            if (empty($errorMessageEmail) && empty($errorMessagePassword)) {

                // Il n'y a pas d'erreur, on passe à l'inscription
                $database = new Database();
                // $database->connect(); appelé directement dans le constructeur

                // On crée un utilisateur en local
                $user = new User('', $_POST['email'], $_POST['password']);

                // On recherche l'utilisateur lié à l'email saisi
                $sql = "SELECT * FROM app_user WHERE email = '{$user->getEmail()}'";

                $user = $database->query($sql, User::class);

                if(empty($user )) {
                    $errorMessageEmail = "Cet email n'existe pas";
                } else {
                    $userPassword = $users[0]->getPassword();

                    var_dump($user->getPassword());
                    var_dump($userPassword);

                    if(password_verify($_POST['password'], $userPassword)) {
                        $_SESSION['username'] = $users[0]->getUsername();

                        var_dump("Youuuhou je suis connecté ");
                    } else {
                        $errorMessagePassword = "Mauvais mot de passe";

                        var_dump("OUiiiinnnn !");
                    }

                }
            }
        }

        return compact('errorMessageEmail', 'errorMessagePassword');
    }
}