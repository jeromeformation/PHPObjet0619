<?php

require dirname(__DIR__) . '/autoload.php';

// Création de motos
$moto = new Moto('Triumph', 'essence');
$moto2 = new Moto('Suzuki', 'essence', 30000);

var_dump($moto);
var_dump($moto2);

// Création de voiture
$car = new Car('207CC', 'essence', 250000);
$car2 = new Car('Mini Cooper', 'essence');

var_dump($car);
var_dump($car2);

// Création d'avions
$plane = new Plane('Airbus A380', 'kérosène', 4);
$plane2 = new Plane('Air Force One', 'kérosène', 2);

var_dump($plane);
var_dump($plane2);

// Création d'hélicoptères
$copter = new Plane('KO', 'kérosène', 2);
$copter2 = new Plane('KA', 'kérosène', 4);

var_dump($copter);
var_dump($copter2);


/*************************************************************/
/*****      On fait avancer les véhicules roulants      ******/
/*************************************************************/

$moto->move(25);
$moto2->move(1000);

$car->move(30);
$car2->move(555);

$plane->move(10000);
$plane2->move(22000);

$copter->move(10000);
$copter2->move(22000);


echo '<hr/>';

// Aéroport
$aeroport = new Aeroport();
$aeroport->addVehicle($moto);
$aeroport->addVehicle($moto2);
$aeroport->addVehicle($car);
$aeroport->addVehicle($car2);
$aeroport->addVehicle($plane);
$aeroport->addVehicle($plane2);
$aeroport->addVehicle($copter);
$aeroport->addVehicle($copter2);




