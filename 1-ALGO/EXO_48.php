<?php

$T = array(1, 12, 15, 17);
$vmax=0;
for ($i=0; $i <4; $i++) { 
     
    if ($T[$i] > $vmax) {
        $vmax = $T[$i];
    }
  }
  
  print_r($vmax .'.'."est la valeur maximale");
      





?>