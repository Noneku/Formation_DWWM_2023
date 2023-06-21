<?php


//  Ecrire un algo qui demande un nombre de départ et qui calcul la somme des entiers jusqu'à ce nombre.


// Variables
$nb = readline("Entrez un nombre : ");

$somme = 1;

// Instruction
for ($i = 1; $i <= $nb; $i++) {

    $somme = $somme + $i;
}

// Affichage
echo "La somme de $nb est : $somme";

?>