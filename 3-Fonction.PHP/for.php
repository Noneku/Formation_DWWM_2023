<?php


// 1. Écrivez une boucle `for` qui affiche les nombres entier de 1 à 10

// 2. Écrivez le code d'une boucle `for` qui affiche les valeurs du tableau suivant :

// Déclaration du tableau 
$liste = array('foo', 'bar', 'baz');

// Boucle for qui affiche les valeurs 
for ($i = 0; $i < count($liste); $i++) {

    // Affichage
    echo $liste[$i];
    echo PHP_EOL;
}
