<?php

$a = 1;
$b = 2;
$c = 3;
$t = 0;

$t = $b;
$b = $a;
$a = $c;
$c = $t;
echo "A=".$a;
echo "\n";
echo "B=".$b;
echo "\n";
echo "C=".$c;






?>