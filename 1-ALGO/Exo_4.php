<?php
//Instruction
$A = 3;
$B = 10;
$C = $A + $B;
$B = $A + $B;
$A = $C;

//Affichage
echo "A = " . $A . "\n";
echo "B = " . $B . "\n";
echo "C = " . $C . "\n";
?>