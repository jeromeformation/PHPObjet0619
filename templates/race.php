<?php

require dirname(__DIR__) . '/autoload.php';

// Création d'un avion
$airbusa380 = new Plane('Airbus', 'Kérosène', 22);
$airbusa380->setMaxAlt('20000');
$airbusa380->move(2000);
echo $airbusa380->getWheels();
var_dump($airbusa380);

// Création d'un bateau
$titanic = new Boat(
    'Paquebot',
    'Fioul',
    ['Cannes', 'Nice', 'Marseille']
);
var_dump($titanic);

// Création de l'aéroport
$aeroport = new Aeroport();
$aeroport->addVehicle($airbusa380);
$aeroport->addVehicle($titanic);
var_dump($aeroport);














