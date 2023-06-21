<?php
$tab1 = array (2,5,8,4);
$tab2 = array (6,7);
$total = 0;

// multiplier un tableau avec un autre 


// for ($i=0; $i < count($tab1) ; $i++) { 
//     $total += ($tab2[0]*$tab1[$i]);
// }

// for ($i=0; $i < count($tab1) ; $i++) { 
//     $total2 += ($tab2[1]*$tab1[$i]);
// }
// echo $total + $total2;

for ($i = 0; $i < count($tab1) ; $i++){

    for($j = 0; $j < count ($tab2) ; $j++){
        $total = ($total + ($tab2[$j]*$tab1[$i]));
    }
}

echo $total;

?>