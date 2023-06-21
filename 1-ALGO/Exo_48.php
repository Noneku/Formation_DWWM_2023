<?php

// Soit un tableau T avec des nombres entiers, ecrire un algorythme qui determine le plus grand élément du tableau 

$nbIndex = readline(" Entrez le nombre d'index : ");
$tableau = array ();
$nbMax = null;

for ( $i = 0; $i < $nbIndex; $i++) {

    $tableau [$i] = readline(" entrez un entier : ");

    if ($tableau[$i] > $nbMax ){

        $nbMax = $tableau[$i];

    }
}

echo "\n";
print_r($tableau);
echo "\n";
echo " Le nombre maximum est : ". $nbMax;

?>