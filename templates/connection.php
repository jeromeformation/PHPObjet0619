<?php
use src\Controller\AuthController;

// On récupère notre contrôleur
$controller = new AuthController();
// On récupère les données de l'index
$datas = $controller->connect();
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

        <h1>Connexion</h1>

        <form method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email"
                       class="form-control <?= (isset($errorMessageEmail) && !empty($errorMessageEmail)) ? 'is-invalid' : '' ?>"
                       id="email" name="email" value="<?= $_POST['email'] ?? '' ?>">
                <div class="invalid-feedback"><?= $errorMessageEmail ?? "" ?></div>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password"
                       class="form-control <?= (isset($errorMessagePassword) && !empty($errorMessagePassword)) ? 'is-invalid' : '' ?>"
                       id="password" name="password" value="<?= $_POST['password'] ?? '' ?>">
                <div class="invalid-feedback"><?= $errorMessagePassword ?? "" ?></div>
            </div>

            <input type="submit" value="Se connecter" class="btn btn-outline-success">

        </form>

    </main>
<?php require 'inc/footer.php'; ?>