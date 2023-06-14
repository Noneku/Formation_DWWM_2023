<?php

// Ecrire un algo qui calcule le nb d'entiers pairs et le nombre d'entiers impairs d'un tableau 

// Déclaration :
$tabT = array();
$nbT = readline("Entrez le nombre de valeurs à insérer dans le tableau : ");
$impair = 0;
$pair = 0;


// Instruction :
for ($i = 0; $i < $nbT; $i++) {

    $tabT[$i] = readline("Entrez un chiffre à ajouter dans le tableau : ");
    $chiffre = $tabT[$i];
    $modulo = $chiffre%2;

    if ($modulo>0) {
        $impair++;
    } else {
        $pair++;
    }
}


// Affichage :
print_r($tabT);
echo "Il y a $pair nombre(s) pair(s) et $impair nombre(s) impair(s) dans le tableau T.";


?>