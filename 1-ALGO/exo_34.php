<?php

/* Ecrivez un algo calculant la somme des valeurs d'un tableau(on suppose que le tableau a été préalablement saisi)*/ 
//Declaration

$tab = array(1,2,3,4,5);
$somme = 0;

//Instruction
for($i=0; $i<count($tab); $i++){
    $somme += $tab[$i];
}
//Affichage
echo $somme;



?>