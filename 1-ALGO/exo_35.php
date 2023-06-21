<?php
// Ecrivez un algorithme constituant un tableau, à partir de deux tableaux de même longueur préalablement saisis. Le nouveau tableau sera la somme des éléments des deux tableaux de départ.
// tableau 1: 4,8,7,9,1,5,,4,6
// tableau 2: 7,6,5,2,1,3,7,4
// tableau à constituer : 11,14,12,11,2,8,11,10


// Tableaux de départ
$tab1 = array(4, 8, 7, 9, 1, 5, 4, 6);
$tab2 = array(7, 6, 5, 2, 1, 3, 7, 4);

// Boucle for pour constituer le tab3
$tab3 = array();
for ($i = 0; $i < count($tab1); $i++) {
    $tab3[$i] = $tab1[$i] + $tab2[$i];
}

// Affichage du tab3
print_r($tab3);

?>