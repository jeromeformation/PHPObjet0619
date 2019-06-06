<?php

require dirname(__DIR__) . '/autoload.php';

/* Utilisation des statiques */

// Récupération du compteur par défaut
var_dump(Compteur::getCompteur()); // 0
// On peut incrémenter le compteur, il est stocké dans la classe
Compteur::addCompteur();
Compteur::addCompteur();
Compteur::addCompteur();
Compteur::addCompteur();
// On récupère le compteur depuis la classe
var_dump(Compteur::getCompteur()); // 4
