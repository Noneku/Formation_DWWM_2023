<?php

//  Soit T un tableau rangé dans l'ordre croissant, ecrire un algorythme qui insere un élement X dans le tableau T en respectant l'ordre croissant 

$tableau = array ("c","r","o","i","s","s","a","n");
// $saisie = readline ("entrer votre saisie : ");
$newIndex = null;

for ( $i = 0; $i <= count($tableau); $i++) {

    if ($i > $newIndex) {

        $newIndex = $i;
        
    }
    
}

echo $tableau[$newIndex] = readline("Entrez votre saisie: ");
echo "\n";
print_r($tableau);


?>