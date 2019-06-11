<?php

use src\Controller\FilmController;

$controller = new FilmController();
extract($controller->show());

require 'inc/header.php'
?>
    <h1>Film <?= $id ?></h1>

    <!-- Ecrire ici votre HTML -->
<?php require 'inc/footer.php' ?>
