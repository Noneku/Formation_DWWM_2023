<?php

// ecrire un algorythme qui déclare et remplisse un tableau contenant les six voyelles

// declaration d'un tableau vide pour le remplir 
$tableau2 = array ();

$tableau [0] = "a";
$tableau [1] = "e";
$tableau [2] = "i";
$tableau [3] = "o";
$tableau [4] = "u";
$tableau [5] = "y";


for ($i = 0; $i < count($tableau); $i++) {

    // index $tableau2 va stocké index $tableau à chaque tour de boucle 
    $tableau2[$i] = $tableau[$i];
}

// affichage du nouveau tableau aux voyelles stockées 
print_r($tableau2);


?>