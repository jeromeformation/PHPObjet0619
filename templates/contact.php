<?php

use src\Controller\ContactController;

$controller = new ContactController();
extract($controller->contact());

require 'inc/header.php'
?>
    <h1>Page de contact</h1>

    <!-- Ecrire ici votre HTML -->
<?php require 'inc/footer.php' ?>
