<?php

$nb1 = readline("entrez un nombre : ");
$nb2 = readline("entrez un nombre : ");

// initialise ma somme a 0
$som = 0;

//donne le produit d'un nombre en l'additionnant 
for ($i=0; $i < $nb2 ; $i++) { 
    $som = $som + $nb1;
}

// aficher le resultat
echo $som."\n";

echo "fin";

?>