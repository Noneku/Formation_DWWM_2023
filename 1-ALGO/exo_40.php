<?php

//soit un tableau T à deux dimensions (12,8) préalablement rempli de valeurs numériques. ecrire un algorithme qui recherche la plus grande valeur au sein de ce tableau.

$T = array();
$vmax =0;


for ($i=0; $i <12; $i++) { 
  for ($j=0; $j <8 ; $j++) { 
    $T[$i][$j]=rand(1,96);
}

}

    for ($i=0; $i <12; $i++) { 
        for ($j=0; $j <8 ; $j++) { 
        if ($T[$i][$j] > $vmax) {
            $vmax = $T[$i][$j];
        }
      }
      
          
          }
      print_r($vmax .'.'."est la valeur maximale");
