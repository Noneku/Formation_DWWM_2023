<?php

/*

afficher les nombres pairs, entre 1 et 100

résultat attendu :

    2
    4
    6
    8
    10
    12
    14
    16
    18
    20
    ...

*/

$nb = 2;
$somme = 0;

/*while ($i<50) {
    $somme = $somme + $nb;
    $i++;
    echo "\n $somme";
}*/

for ($i=0; $i < 50; $i++) { 
    $somme = $somme + $nb;
    echo "\n $somme";
}



