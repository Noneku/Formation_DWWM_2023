<?php


$tab1 = [2,5,8,4];
$tab2 = [6,7];
$tab = 0;
$i = 0;
$j = 0;


for ($i=0; $i < sizeof($tab1) ; $i++) { 
    $tab1[$i];

    for ($j=0; $j <sizeof($tab2) ; $j++) { 
      $tab += $tab1[$i] * $tab2[$j] ;
    }
}

print_r($tab);















?>