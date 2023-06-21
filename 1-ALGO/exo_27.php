<?php

//  calcul de la moyenne de 2 notes dont une à un coeff 1 et l'autre coeff 2, la moyenne de ces 2 notes doivent etre supérieures à 10 pour valider le module
// saisie de 2 notes 

$saisieNote1 = readline("Entrez la premiere note: ");
$saisieNote2 = readline("Entrez le deuxieme nombre: "); 

//  calcul de la moyenne des notes 
$calculnote1 = $saisieNote1 * 1;
$calculnote2 = $saisieNote2 * 2;
$resultatMoyenne = ($calculnote1 + $calculnote2) / 3;

// condition

if ($resultatMoyenne >=10) {
    echo "Module validé, moyenne de ".round($resultatMoyenne, 2);
} else {
    echo "Module non validé, moyenne de ".round($resultatMoyenne, 2);
}

?>