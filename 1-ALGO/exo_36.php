<?php

$schtroumpf = 0;

//creaion tableau
$tab1 = array('2', '5', '8','4');
$tab2 = array('6', '7');

for ($i=0; $i <= 3 ; $i++) { 
   
    for ($j=0; $j <= 1 ; $j++) { 
        
        $schtroumpf = $schtroumpf + ( $tab1[$i] * $tab2[$j]);
    }
}

echo $schtroumpf;




?>