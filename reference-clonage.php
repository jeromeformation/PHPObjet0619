<?php

require 'autoload.php';

$ballon1 = new Produit();
$ballon1->name = "Ballon";

$ballon2 = new Produit();
$ballon2->name = "Ballon";

if($ballon1 == $ballon2) {
    echo "Egaux";
} else {
    echo "Différent";
}

if($ballon1 instanceof Produit) {
    echo "je suis un produit";
} else {
    echo "je suis autre chose";
}
