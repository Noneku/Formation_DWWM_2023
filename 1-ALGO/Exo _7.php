<?php

// On démontre
$A = 1;
$B = 2;
$C = 3;
$temp;

// On Permute
$temp = $A;
$A = $C;
$B = $temp;
$C = $B;

//  On Affiche 
echo "la valeur A est " .$A;
echo "\n";
echo "la valeur B est " .$B;
echo "\n";
echo "la valeur C est " .$C;

?>