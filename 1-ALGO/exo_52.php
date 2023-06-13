<?php

/*Ecrire un algo qui calcule le nombre d'entiers pairs et le nombre d'entiers impairs d'un tableau */ 

$tab = array(2,9,5,4,1);
$nbPair = 0;
$nbImpair = 0;

for ($i=0; $i <count($tab) ; $i++) { 

    if ($tab[$i] % 2 == 0){

        $nbPair++;
    }else{
    $nbImpair++;
    }
}

echo"Il y a $nbPair nombre pairs et $nbImpair nombre impairs";
?>