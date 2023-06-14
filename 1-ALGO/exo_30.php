<?php

// Donner le résultat de la multiplication de 2 nb en ne faisant que des additions 

// Variables :
$nb1 = readline("Entrez un nombre : ");
$nb2 = readline("Entrez un 2e nombre : ");
$resultat = 0;

// Instruction :
for ($i=0; $i<$nb2; $i++) {
    $resultat += $nb1;
}

// Affichage :
echo "Le resultat de la multiplication de $nb1 et $nb2 est $resultat.";
?>
