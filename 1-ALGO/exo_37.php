<?php


// Ecrivez un algorithme qui permet la saisie d'un nombre quelconque de valeurs. Toutes les valeurs doivent etre ensuite augmentés de 1 et le 
// nouveau tableau sera affiché à l'écran.

$tableau = array ();
$nombreSaisie = readline( "Entrez le nombre de saisie : ");


for ( $i = 0; $i < $nombreSaisie; $i++) {

// permet d'entrer des valeurs dans un tableau

$tableau[$i] = readline("Entrez une valeur: ") + 1;

}


print_r($tableau);

?>