<?php

/* On crée un autoloader */
// Définition de la fonction d'autoloading
function myAutoloader(string $className): void
{
    require 'src/Classes/' . $className . '.php';
}

// Enregistrement de la fonction d'autoloading
spl_autoload_register('myAutoloader');
