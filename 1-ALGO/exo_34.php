<?php

$tab = array(1,2,3,4,5);
$som = 0;

for ($i=0; $i < count($tab) ; $i++) { 
    $som += $tab[$i];
}

echo $som;


// echo array_sum($tab);

?>