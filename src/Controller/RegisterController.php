<?php
namespace src\Controller;

use src\Entity\User;
use src\Utilities\Database;
use src\Utilities\FormValidator;

class RegisterController
{
    /**
     * Vérification formulaire + inscription de l'utilisateur en BDD
     * @return array - Les données à envoyer à la vue
     * @throws \Exception
     */
    public function register(): array
    {

        $formValidator = new FormValidator();
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {


            $formValidator->validate([
                ['username', 'text', 128],
                ['email', 'text', 128],
                ['password', 'text', 128],
                ['password-confirm', 'text', 128]
            ]);

            FormValidator::sanitizeRadio('role');

            // Vérification concordance mot de passe
            if($_POST['password'] !== $_POST['password-confirm']) {
                $errors['password'] = 'Les mots de passe ne correspondent pas';
            }

            if (!$formValidator->isError()) {

                // Il n'y a pas d'erreur, on passe à l'inscription
                $database = new Database();
                // $database->connect(); appelé directement dans le constructeur

                // On crée un utilisateur en local
                $role = ($_POST['role']) ? 'admin' : 'user';
                $user = new User($_POST['username'], $_POST['email'], $_POST['password'], $role);

                $query = "INSERT INTO app_user (username, email, password, role) VALUES (" .
                    $user->getStrParamsSQL() .
                    ")";

                try {
                    // On essaye d'insérer en BDD
                    $success = $database->exec($query);
                } catch(\PDOException $e) {
                    // Une exception PDO est arrivée, on récupère son code
                    $code = $e->getCode();
                    // Le code 23000 = email unique
                    if ($code === '23000') {
                        // On affiche un message d'erreur
                       $errorMessageEmail = 'Email déjà utilisé';
                    } else {

                        var_dump($e);
                        // Si on ne sait pas comment gérer, on provoque une exception
                        throw new \Exception('PDOException dans RegisterController');
                    }
                }

                // Si l'enregistrement a bien été fait, on redirige l'utilisateur
                if($success === 1) {
                    $url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'];
                    header('Location: '.$url.'/');
                }
            }

        }
        return compact('errors', 'success', 'user', 'formValidator');
    }
}