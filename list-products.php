<?php

require 'autoload.php';

// On crée un nouveau Produit
$hamac = new Produit(); // myAutoloader("Produit");
$hamac->setName("Hamac");
$hamac->setDescription("Pour se reposer après 5 jours de PHP");
$hamac->setImageName("hamac.jpg");
$hamac->setPrice(100);

// On crée un 2ème Produit
$parasol = new Produit();
$parasol->setName("Parasol");
$parasol->setDescription("On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.");
$parasol->setImageName("parasol.jpg");

// On crée un tableau pour stocker les objets Produit
$products = [$hamac, $parasol];
var_dump($products);
?>

<?php require 'inc/header.php'; ?>

<main class="container">
    <h1 class="mt-2">Présentation des produits</h1>
    <section class="row">
        <?php foreach ($products as $product) : ?>
            <div class="col-4">
                <div class="card">
                    <img src="/img/uploads/<?= $product->getImageName(); ?>" class="card-img-top"
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
