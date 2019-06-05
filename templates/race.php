<?php

require dirname(__DIR__) . '/autoload.php';

// Création d'un véhicule
$vehicle = new Vehicle("Renault",'Essence',4);
var_dump($vehicle);