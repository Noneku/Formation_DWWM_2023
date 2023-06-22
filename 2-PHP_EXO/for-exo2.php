<?php

/*

afficher les nombres divisibles par 3, entre 1 et 100

résultat attendu :

    3
    6
    9
    12
    15
    18
    21
    24
    27
    30
    ...

*/

$nb = 3;
$somme = 0;

for ($i=1; $somme < 99; $i++) {
        $somme += $nb;
        echo "\n $somme";
    }

    


