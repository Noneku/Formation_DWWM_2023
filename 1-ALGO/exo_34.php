<?php

// declaration d'un tableau prérempli
$tab = array (1,2,3,4,5) ;

$resultat = 0;
// tant que $i est inferieur a la longueur du tableau 
for ($i = 0 ; $i < count ($tab) ; $i++) {
 
    // resultat =  resultat plus $i (valeur dans le tableau)
    $resultat += $tab [$i] ;


}

echo "la somme est $resultat ";

?>