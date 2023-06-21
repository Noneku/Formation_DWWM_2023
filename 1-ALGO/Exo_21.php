<?php
// Variables
$a = readline("Entrez un nombre : ");

$b = 1;

// Instruction
for ($i = 1; $i <= $a; $i++) {
    $b *= $i;
}

// Affichage
echo "Le produit de $a est : $b";

?>