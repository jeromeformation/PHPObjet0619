<?php
use src\Controller\SitesController;

// On récupère notre contrôleur
$controller = new SitesController();
// On récupère les données de l'index
$datas = $controller->sites();
// On extrait les données pour pouvoir les utiliser en tant que variables
extract($datas);

require 'inc/header.php';

?>

    <main class="container">
    </main>

<?php require 'inc/footer.php'; ?>