<?php

$tab1 = [2,5,8,4];
$tab2 = [6,7];
$result = [];
$sum = 0;

for ($i=0; $i < count($tab2) ; $i++) { 
    
    for ($j=0; $j < count($tab1); $j++) { 

        $result[$j] = $tab2[$i] * $tab1[$j];

        $sum += $result[$j];
    }
      
}

echo $sum

?>