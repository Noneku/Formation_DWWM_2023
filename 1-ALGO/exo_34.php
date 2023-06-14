<?php

// Ecrire un algo qui calcule la somme des valeurs d'un tableau 

// Déclaration :
$val = array(4, 8, 5, 9, 12, 7, 3);
$somme = 0;

// Instruction : 
for ($i = 0; $i < count($val); $i++) {
    $somme += $val[$i];
}

// Affichage :
echo "La somme des valeurs du tableau est : $somme.";
?>