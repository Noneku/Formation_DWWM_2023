<?php

/*

afficher les nombres non divisibles par 3, entre 1 et 100

résultat attendu :

    1
    2
    4
    5
    7
    8
    10
    11
    13
    14
    ...

*/

$nb = 1;

for ($i=1; $nb < 100; $i++) {
       if($nb%3)
       echo "$nb\n";
    }
