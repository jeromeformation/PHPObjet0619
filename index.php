<?php
// On inclue la classe pour l'utiliser
require 'Classes/Produit.php';


// On crée un nouveau Produit
$hamac = new Produit();
$hamac->name = "Hamac";

var_dump($hamac);

// On créer un 2ème objet
$parasol = new Produit();
$parasol->name = "Parasol";

var_dump($parasol);
?>

<?php require 'inc/header.php'; ?>

    <h1>Liste des produits</h1>

<?php require 'inc/footer.php'; ?>
