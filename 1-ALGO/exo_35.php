<?php

$tableau1 = array (4, 8, 7, 9, 1, 5, 4, 6);
$tableau2 = array (7, 6, 5, 2, 1, 3, 7, 4);
$tableau3 = array ();

for ( $i = 0; $i < count($tableau1); $i++ ) {
    
    echo  $tableau3 [$i] = $tableau1[$i] + $tableau2[$i];
    echo "\n";


}

print_r($tableau3);


?>