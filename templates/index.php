<?php

use src\Controller\IndexController;

// On récupère notre contrôleur
$controller = new IndexController();
// On récupère les données de l'index
$datas = $controller->index();
// On extrait les données pour pouvoir les utiliser en tant que variables
extract($datas);

require 'inc/header.php';
?>

<main class="container">
    <h1 class="mt-2">Présentation des produits</h1>
    <section class="row">
        <?php foreach ($products as $product) : ?>
            <div class="col-4">
                <div class="card">
                    <img src="/public/img/uploads/<?= $product->getImageName(); ?>" class="card-img-top"
                         alt="Image de <?= $product->getName() ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product->getName(); ?></h5>
                        <p class="card-text"><?= $product->getShortDescription(); ?></p>
                        <a href="#" class="card-link btn btn-outline-info">Détail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</main>

<?php require 'inc/footer.php'; ?>

