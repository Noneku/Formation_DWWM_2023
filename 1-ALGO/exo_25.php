<?php

//  saisir 2 valeurs et calculer la moyenne

// saisie des entiers 
$saisieNb1 = (int) readline("Entrez le premier nombre: ");
$saisieNb2 = (int) readline("Entrez le deuxieme nombre: "); 

// calcul de la moyenne

$moyenne = ($saisieNb1 + $saisieNb2) / 2;

echo "la moyenne est de " . $moyenne;

?>
