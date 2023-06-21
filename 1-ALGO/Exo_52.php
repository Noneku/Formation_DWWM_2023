<?php

// Ecrire un algorythme qui calcule les nombres entiers pairs et les nombres d'entiers impairs d'un tableau d'entier 
// modulo : Un nombre est pair si c'est un multiple de 2. si le reste de la division par 2 vaut 0.


$nbSaisie = readline(" Entrez le nombre d'index : ");
$tableau = array ();
$totalNbPair = null;
$totalNbImpair = null;

for ( $i = 0; $i < $nbSaisie; $i++) {

    $tableau [$i] = readline(" entrez un entier : ");

    if ($tableau[$i] % 2 == 0 ){


        $totalNbPair++;

    } else {

        $totalNbImpair++;

    }
}

print_r($tableau);
echo "\n";
echo "il y a : ".$totalNbPair."nombre(s) pair(s)";
echo "\n";
echo "il y a : ".$totalNbImpair."nombre(s) impair(s)";


?>