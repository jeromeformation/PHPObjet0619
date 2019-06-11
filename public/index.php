<?php

require dirname(__DIR__) . '/autoload.php';

// Appel du routeur
use src\Utilities\Router;

// On ajoute les routes
$router = new Router();
$router->addRoute('/', 'index.php');
$router->addRoute('/inscription', 'register.php');
$router->addRoute('/connexion', 'connection.php');
$router->addRoute('/contactez-moi', 'contact.php');
$router->addRoute('/film/[0-9]', 'film.php');
$router->addRoute('/film/[0-9]+
', 'film.php');

// On souhaite récupérer le fichier à exécuter
$template = $router->match();

if(is_null($template)) {
    throw new \Exception('Page introuvable');
} else {
    require dirname(__DIR__) . "/templates/" . $template;
}
