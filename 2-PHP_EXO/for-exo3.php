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

echo "Les nombres non divisables par 3 sont : " ;
for ($i = 1; $i < 101; $i++) {
    if ($i % 3 / 1) {
        echo $i . " ";
    }
}