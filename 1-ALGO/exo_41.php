<?php
/*Ecrire un algo effectuant le decalage des elements d'un tableau
-DECALAGE
->ECALAGED*/
// Declaration
$T=array("D","E","C","A","L","A","G","E");
$i=0;
$stoc=$T[0];
// Décalage des élément
print_r($T);

for ($i=1; $i <count($T); $i++){ 

    $T[$i-1]=$T[$i];

}

// Affichage
$T[count($T)-1]=$stoc;
print_r($T);
?>