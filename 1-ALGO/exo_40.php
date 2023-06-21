<?php

// Soit un tableau T a deux dimenssions (12,8) préalablement rempli de valeur numériques. Ecrire un algorithme qui recherche la plus grande valeur 
// au sein de ce tableau 

$nbMax = null;

$tableau = array (
    array (1, 2, 3, 4, 5, 6, 7, 8),
    array (9, 10, 45, 40, 4, 10, 22, 8),
    array (9, 10, 45, 40, 4, 10, 22, 8),
    array (9, 10, 45, 40, 4, 10, 22, 8),
    array (9, 10, 45, 40, 4, 80, 22, 8),
    array (9, 10, 45, 40, 4, 10, 22, 8),
    array (9, 10, 45, 40, 4, 10, 22, 8),
    array (9, 132, 45, 40, 4, 10, 22, 8),
    array (9, 10, 45, 40, 4, 70, 22, 8),
    array (9, 10, 45, 40, 4, 10, 22, 8),
    array (9, 10, 45, 40, 4, 10, 22, 8),
    array (9, 10, 90, 40, 4, 10, 22, 8),

);

//  cette première boucle permet de parcourir les 12 lignes du tableau
for ( $i=0; $i < count($tableau); $i++ ) {

// cette deuxieme boucle permet de parcourir la longueur du tableau et chaques index grace à count($tableau[$j];
    for ( $j = 0; $j < count($tableau[$j]); $j++) {

// la condition permet de parcourir chaque ligne et chaque index du tableau 
        if ($tableau[$i][$j] > $nbMax) {

            $nbMax = $tableau[$i][$j];

        }
    }

}

echo "le nombre max est : ".$nbMax; 

?>