<?php 
// Réécrire l'algorithme précédent, mais cette fois-ci,on ne connaît pas d'avance combien l'utilisateur souhaite saisir de nombres. La saisie des nombres s'arrête lorsque l'utilisateur entre un zéro.

// variables 
$nbMax = 0;
$pos = 0;
$i = 0;
$nb = 0;

// Instruction
do {    
    $i++;
    $nb = readline("Entrer un nombre");
    if ($nbMax < $nb) {
        $nbMax = $nb;
        $pos = $i;
        }

    } while ($nb != 0);

    // Affiche
    echo "$nbMax en $pos";

?> 

