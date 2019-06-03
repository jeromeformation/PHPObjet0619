<?php require 'inc/header.php'; ?>

    <main class="container">

    <h1>Inscription</h1>

        <form method="post">

            <div class="form-group">
                <label for="username">Nom d'utilisateur</label>
                <input type="text"
                       class="form-control <?= (isset($errorMessageUsername) && !empty($errorMessageUsername)) ? 'is-invalid' : '' ?>"
                       id="username" name="username" value="<?= $_POST['username']  ?? '' ?>">
                <div class="invalid-feedback"><?= $errorMessageUsername ?? "" ?></div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email"
                       class="form-control <?= (isset($errorMessageEmail) && !empty($errorMessageEmail)) ? 'is-invalid' : '' ?>"
                       id="email" name="email" value="<?= $_POST['email']  ?? '' ?>">
                <div class="invalid-feedback"><?= $errorMessageEmail ?? "" ?></div>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password"
                       class="form-control <?= (isset($errorMessagePassword) && !empty($errorMessagePassword)) ? 'is-invalid' : '' ?>"
                       id="password" name="password" value="<?= $_POST['password']  ?? '' ?>">
                <div class="invalid-feedback"><?= $errorMessagePassword ?? "" ?></div>
            </div>

            <input type="submit" value="S'inscrire" class="btn btn-outline-success">

        </form>

    </main>
<?php require 'inc/footer.php'; ?>