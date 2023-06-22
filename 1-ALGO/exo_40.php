<?php

$tableau = array(
    array(1,2,3,4,5,6,7,8),
    array(45,12,9,14,64,6,7,8),
    array(84,2,3,4,5,6,7,8),
    array(1,64,3,4,5,6,7,8),
    array(1,2,45,99,5,6,94,8),
    array(1,2,3,4,5,6,7,8),
    array(1,2,3,45,5,6,7,8),
    array(1,2,3,4,64,6,7,8),
    array(64,2,45,4,5,6,7,8),
    array(1,2,3,84,5,6,7,8),
    array(1,2,65,4,5,64,7,8),
    array(1,64,3,4,52,6,45,8),
);

$pg = 0;


for ($i=0; $i < count($tableau) ; $i++) {
    for ($j=0; $j < count($tableau[$i]); $j++) { 
        if ($tableau[$i][$j]>$pg) {
            $pg = $tableau[$i][$j];
        }
    }
    
}

echo $pg;

?>