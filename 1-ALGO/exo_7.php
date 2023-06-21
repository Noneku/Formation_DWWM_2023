<?php

//les variables
$a = 1;
$b = 2;
$c = 3;
$tmp=0;


//permutations

$tmp = $b;
$b = $a ;
$a = $c ;
$c = $tmp;

//affichage

echo $a."\n";
echo $b."\n";
echo $c;








?>