<?php

// Ecrire un algorithme qui demande un nombre de départ, et qui calcule la somme des entiers jusqu'à ce nombre. Par exemple, si l'on entre le 5, le programme doit calculer:1 + 2 + 3 + 4 + 5 = 15

// Variables
$a = readline("Entrez un nombre : ");

$b = 0;

// Instruction
for ($i = 1; $i <= $a; $i++) {
    $b += $i;
}

// Affichage
echo "La somme de $a est : $b";

?>
