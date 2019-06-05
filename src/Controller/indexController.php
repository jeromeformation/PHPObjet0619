<?php

require dirname(__DIR__, 2) . '/autoload.php';

// Connexion à la BDD
$database = new Database();
$database->connect();

// Requête SQL
$query = "SELECT * FROM produit WHERE etat_publication = 1";
// Exécution de la requête SQL et récupération des produits
$products = $database->query($query, 'Produit');
