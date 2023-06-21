<?php
// Modifier ensuite l'algorithme pour que le programme affiche de surcroît en quelle position avait été saisie ce nombre

// Variables 
$nb2 = 0;
$pos = 0;

// Instruction 
for ($i = 0; $i < 20; $i++) {
    $a = readline("Entrer un nombre");
    if ($nb2 < $a) {
    $nb2 = $a;
    $pos = $i+1;
    }
}

// Affichage 
echo "$nb2 en $pos";

?>