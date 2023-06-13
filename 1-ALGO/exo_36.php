<?php
$tab1 = array(2, 5, 8, 4);
$tab2 = array(6, 7);
$resultat = 0;


for ($i = 0; $i < count($tab1); $i++) {
    for ($j = 0; $j < count($tab2); $j++) {
        $resultat = $resultat + ($tab1[$i] * $tab2[$j]);
    }
}



echo $resultat;
