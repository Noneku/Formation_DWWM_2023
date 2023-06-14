<?php

// Même exo que le 20 mais en calculant la factorielle 

// Déclaration :
$nb = readline("Entrez un nombre : ");
$somme = 1;

// Instructions : 
for ($i = 1; $i<=$nb; $i++) {
    $somme = $i*$somme;
    echo $i, "x";
}

// Affichage :
echo "=", $somme;

?>