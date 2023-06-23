<?php

//  Soit T un tableau rangé dans l'ordre croissant, ecrire un algorythme qui insere un élement X dans le tableau T en respectant l'ordre croissant 

$tableau = array ("c","r","o","i","s","s","a","n");
// $saisie = readline ("entrer votre saisie : ");
$newIndex = null;

// boucle 
for ( $i = 0; $i <= count($tableau); $i++) {

    // condition : si $i est supérieur $neWIndex 
    if ($i > $newIndex) {
        
        // alors $newIndex prendra la valeur de $i qui va faire 8 boucles, $newIndex sera égal à 8
        echo $newIndex = $i;
        
    }
    
}

// ajout de la nouvelle valeur au tableau soit $tableau à l'index 8 
echo $tableau[$newIndex] = readline("Entrez votre saisie: ");
echo "\n";
print_r($tableau);


?>