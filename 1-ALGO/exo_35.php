<?php

// declaration de deux tableaux de meme longueur  plus un tableau vide 
$tableau1 = array (4, 8, 7, 9, 1, 5, 4, 6);
$tableau2 = array (7, 6, 5, 2, 1, 3, 7, 4);
$tableau3 = array ();

// boucle permettant de remplir le tableau vide en additionnant les élements du  tableau1 et le tableau2
for ( $i = 0; $i < count($tableau1); $i++ ) {
    
    // remplissage du $tableau3 
    echo  $tableau3 [$i] = $tableau1[$i] + $tableau2[$i];
    echo "\n";


}

// affichage
print_r($tableau3);


?>