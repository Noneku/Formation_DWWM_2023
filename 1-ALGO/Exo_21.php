<?php

//  Ecrire un algorithme qui demande un  nombre de départ et qui calcule sa factorielle.


// Variables
$nb = readline("Entrez un nombre : ");

$factorielle = 1;

// Instruction
for ($i = 1; $i <= $nb; $i++) {

    echo $i;

//  exemple: saisie d'un chiffre 4
//  va afficher : 1 * 1 
//  1 * 2
//  2 * 3
//  6 * 4 
//  resultat = 24 

    $factorielle = $factorielle * $i;
    // ou $factorielle *= $i;
}

// Affichage
echo "La factorielle de $nb est : $factorielle ";

?>