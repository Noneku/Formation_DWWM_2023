<?php

// Soit un tableau T avec des nombres entiers, ecrire un algorythme qui determine le plus grand élément du tableau 


// variable 
$nbIndex = readline(" Entrez le nombre d'index : ");
$tableau = array ();
$nbMax = null;

// Meme principe que l'exercice 38 mais sans  position 

// boucle 
for ( $i = 0; $i < $nbIndex; $i++) {

    // saisie des chiffres + remplissage tableau 
    $tableau [$i] = readline(" entrez un entier : ");
    
    // condition : si $tableau[$i] est supérieur à nbMax alors stockage de la saisie dans la variable $nbMax 
    if ($tableau[$i] > $nbMax ){

        $nbMax = $tableau[$i];

    }
}

echo "\n";
// affichage tableau
print_r($tableau);
echo "\n";
// affichage $nbMax
echo " Le nombre maximum est : ". $nbMax;

?>