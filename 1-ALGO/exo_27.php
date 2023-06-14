<?php

// Ecrire un algo qui donne le résultat (validé ou non) d'un module en fonction d'une note oral de coef 1 et d'une note écrit de coef 2

// Déclaration :
$note1 = readline("Entrez votre note d'écrit : ");
$note2 = readline("Entrez votre note d'oral : ");
$note2Coef = $note2*2;
$moy = ($note1+$note2Coef)/3;

// Instruction :
if ($moy>=10) {
    echo "Bravo ! Vous avez validé votre module, beau travail !";
} else {
    echo "Désolé, votre module n'est pas validé, il fallait mieux réviser ...";
}

?>