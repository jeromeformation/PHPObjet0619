<?php

require dirname(__DIR__) . '/autoload.php';

// Création d'un véhicule
$vehicle = new Vehicle("Renault",'Essence',4);
$vehicle->move(15);
$vehicle->move(17);


var_dump($vehicle);

// Création d'un autre véhicule
$vehicle2 = new Vehicle("Dacia",'Diesel',4);
$vehicle2->move(100);
$vehicle2->move(4);

var_dump($vehicle2);

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

$aeroport = new Aeroport();
$aeroport->addVehicle($vehicle);
$aeroport->addVehicle($vehicle2);
$aeroport->addVehicle($airbusa380);
$aeroport->addVehicle($titanic);


var_dump($aeroport);














