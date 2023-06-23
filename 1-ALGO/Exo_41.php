<?php

// Ecrire l'algorithme effectuant le décalage des élements d'un tableau  
// tableau initial : decalage
// tableau modifié à gauche : ecalaged -->

$tableau = array ( "D", "E", "C", "A", "L", "A", "G", "E");


//  PREMIERE METHODE: ECRASER LES LETTRES (A REVOIR)

for ($i = 0; $i < count($tableau); $i++) {

    $tableau[$i] = readline("Entrez la lettre: ");

}




echo "\n";
print_r($tableau);
echo "\n";


?>