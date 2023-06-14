<?php

//variables
$a = 3;
$b = 10;
$c= 0;

//percutations

$c = $a + $b;       
$b = $a + $b;
$a = $c;
//affichage

echo $c;
echo "\n";
echo $b;
echo "\n";
echo $a;


?>