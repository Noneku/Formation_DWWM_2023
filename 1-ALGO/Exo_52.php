<?php

// Ecrire un algorythme qui calcule les nombres entiers pairs et les nombres d'entiers impairs d'un tableau d'entier (par modulo) 
// modulo : Un nombre est pair si c'est un multiple de 2. si le reste de la division par 2 vaut 0.


// Variables 
$nbSaisie = readline(" Entrez le nombre d'index : ");
$tableau = array ();
$totalNbPair = null;
$totalNbImpair = null;


// boucle 
for ( $i = 0; $i < $nbSaisie; $i++) {

    // demande de saisie + remplissage tableau 
    $tableau [$i] = readline(" entrez un entier : ");

    //  condition : si le chifre saisie est modulo de 2 alors il est pair , sinon impair 
    if ($tableau[$i] % 2 == 0 ){

        // Stockage total nb pair 
        $totalNbPair++;

    } else {

        // Stockage total nb impair
        $totalNbImpair++;

    }
}

// affichage tableau 
print_r($tableau);
echo "\n";
// affichage total nb pair et impairs
echo "il y a : ".$totalNbPair."nombre(s) pair(s)";
echo "\n";
echo "il y a : ".$totalNbImpair."nombre(s) impair(s)";


?>