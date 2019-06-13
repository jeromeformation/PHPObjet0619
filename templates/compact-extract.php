<?php
// Controleur
function controller() {
    $error1 = 'Erreur 1';
    $error2 = 'Erreur 2';

    return compact('error1', 'error2');
}

// Template
$tabTemplate = controller();
var_dump($tabTemplate);

extract($tabTemplate);

echo $error1;
echo $error2;


