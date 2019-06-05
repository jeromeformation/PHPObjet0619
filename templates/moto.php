<?php

require dirname(__DIR__) . '/autoload.php';

$moto = new Moto('Triumph');

$motoClone = clone $moto;

var_dump($moto);
var_dump($motoClone);

$motoClone->setMarque('Nouvelle marque');


var_dump($moto);
var_dump($motoClone);