<?php
// Ecrire un algorithme qui demande un nombre de départ, et qui calcule sa factorielle

// Variables
$a = readline("Entrez un nombre : ");

$b = 1;

// Instruction
for ($i = 1; $i <= $a; $i++) {
    $b *= $i;
}

// Affichage
echo "La somme de $a est : $b";

?> 


