<?php
// Création de tableau
$tab1 = array();
$tab2 = array();
$tab3 = array();

// Définition du 1er tableau 
$tab1[0] = 4;
$tab1[1] = 8;
$tab1[2] = 7;
$tab1[3] = 9;
$tab1[4] = 1;
$tab1[5] = 5;
$tab1[6] = 4;
$tab1[7] = 6;

// Définition du 2ème tableau
$tab2[0] = 7;
$tab2[1] = 6;
$tab2[2] = 5;
$tab2[3] = 2;
$tab2[4] = 1;
$tab2[5] = 3;
$tab2[6] = 7;
$tab2[7] = 4;

// Boucle
for ($i=0; $i <count($tab1) ; $i++) { 
    $tab3[$i] = $tab1[$i] + $tab2[$i];
}

// Afficher le 3ème tableau
print_r($tab3)




?>