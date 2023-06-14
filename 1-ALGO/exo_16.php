<?php

// Ecrire un algo qui demande un nb et l'informe si le nb est positif ou négatif en incluant le 0

// Déclaration :
$nb = readline("Entrez un nombre : ");


// Instruction / Affichage : 
if ($nb == 0) {
    echo "$nb est nul.";
} else if ($nb > 0) {
    echo "$nb est positif.";
} else if ($nb < 0) {
    echo "$nb est negatif.";
}

?>