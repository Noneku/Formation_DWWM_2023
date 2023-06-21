<?php

// Création de tableau 
$tab1 = array(2, 5, 8, 4);
$tab2 = array(6, 7);
$somme1 = 0;
$somme2 = 0;
$somme3 = 0;

// 2 Boucles pour multiplier les valeurs 
for ($i=0; $i < count($tab1) ; $i++) {
    $somme1 += $tab2[0] * $tab1[$i];
    $somme2 += $tab2[1] * $tab1[$i]; 
   
}


$somme3 = $somme1 + $somme2;
echo "le schtroumpf sera : $somme3";
?>