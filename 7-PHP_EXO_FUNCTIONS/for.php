<?php


// 1. Écrivez une boucle `for` qui affiche les nombres entier de 1 à 10

// 2. Écrivez le code d'une boucle `for` qui affiche les valeurs du tableau suivant :

$liste = array(
    'foo',
    'bar',
    'baz'
);

// 1.

for ($i = 1; $i <= 10; $i++) {
    echo $i, "\n";
}

//2. 

echo "\n";

for ($i = 0; $i < count($liste); $i++) {
    echo $liste[$i], "\n";
}
