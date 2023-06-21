<?php

// Variables
$nb = readline("Entrez un nombre : ");

$factorielle = 1;

// Instruction
for ($i = 1; $i <= $nb; $i++) {
    $factorielle *= $i; 
    // $factorielle = factorielle * $i
}

// Affichage
echo "La factorielle de $nb est : $factorielle ";

?>