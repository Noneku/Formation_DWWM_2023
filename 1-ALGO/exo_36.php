<?php

// Saisir 2 tab & écrire un algo qui calcule le schtroumpf de ces deux tableaux, cad qui multiplie chaque élément du tab1 par chaque élément du tab2 et additionne le tout 

// Déclaration : 
$tab1 = array(2, 5, 8, 4);
$tab2 = array(6, 7);

$schtroumpf = 0;

// Instruction : 
for ($i = 0; $i<count($tab1); $i++) {
    for ($j = 0; $j <count($tab2); $j++){
        $schtroumpf = $schtroumpf + ($tab1[$i]*$tab2[$j]);
    }
    }


// Affichage :
echo "Le nombre Schtroumpf de ces deux tableaux est $schtroumpf.";
?>