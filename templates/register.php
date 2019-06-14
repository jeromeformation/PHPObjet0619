<?php
use src\Controller\RegisterController;

// On récupère notre contrôleur
$controller = new RegisterController();
// On récupère les données de l'index
$datas = $controller->register();
// On extrait les données pour pouvoir les utiliser en tant que variables
extract($datas);

require 'inc/header.php';


?>

    <main class="container">

        <?php if (isset($success) && $success === 1) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Utilisateur inscrit : Bonjour <?= (isset($user)) ? $user->getUsername() : '' ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

        <h1>Inscription</h1>

        <form method="post">


            <?= $formValidator->generateInputText('username', 'text','Nom d\'utilisateur',$errors) ?>
            <?= $formValidator->generateInputText('email', 'email','Adresse email',$errors) ?>
            <?= $formValidator->generateInputText('password', 'password','Mot de passe',$errors) ?>
            <?= $formValidator->generateInputText('password-confirm', 'password','Vérification mot de passe',$errors) ?>

            <div class="form-group">
                <label for="role">Veux-tu être un admin ?</label>
                <input type="checkbox"
                       class="form-control <?= (isset($errors['role']) && !empty($errors['role'])) ? 'is-invalid' : '' ?>"
                       id="role" name="role" value="<?= $_POST['role'] ?? '' ?>">
                <div class="invalid-feedback"><?= $errors['role'] ?? "" ?></div>
            </div>

            <input type="submit" value="S'inscrire" class="btn btn-outline-success">

        </form>

    </main>
<?php require 'inc/footer.php'; ?>