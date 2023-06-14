<?php

// Algo qui demande un nb et calcule la somme des entiers jusqu'à ce nombre 

// Déclarations :

$nb = readline("Entrez un nombre : ");
$somme = 0;


// Instructions :
for ($i = 1; $i<=$nb; $i++) {
    $somme = $i+$somme;
    echo $i, "+";
}

// Affichage :
echo "=", $somme;


?>