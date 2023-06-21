<?php

// Ecrire l'algorithme effectuant le décalage des élements d'un tableau  
// tableau initial : decalage
// tableau modifié à gauche : ecalaged -->

$tableau = array ( "D", "E", "C", "A", "L", "A", "G", "E");
$nouveauTableau = array ();

//  PREMIERE METHODE: ECRASER LES LETTRES 

for ($i = 0; $i < count($tableau); $i++) {

    $tableau[$i] = readline("Entrez la lettre: ");

}

// AFFICHER TABLEAU ORDRE DECROISSANT


// for ($i = 7; $i >= 0; $i--) {

//     echo $nouveauTableau [$i] = $tableau[$i];

// }

// $tableau = $nouveauTableau;


echo "\n";
print_r($tableau);
echo "\n";


?>