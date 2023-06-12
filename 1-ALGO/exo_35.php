<?php
//Array Declarations
$tab1 = [1,2,3,4,5];
$tab2 = [1,2,3,4,5];
$tabResult = [];

for ($i=0; $i < count($tab1); $i++) { 
    //Add  totals of content $tab1 and $tab2 in $tabResult -> index 0
    $tabResult[$i] = $tab1[$i] + $tab2[$i];
}

var_dump($tabResult);
?>