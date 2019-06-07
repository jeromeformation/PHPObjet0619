<?php

require dirname(__DIR__) . '/autoload.php';

// Appel du routeur
use src\Utilities\Router;

$router = new Router();
$router->addRoute('/', 'index.php');
$router->addRoute('/inscription', 'register.php');

var_dump($router);
