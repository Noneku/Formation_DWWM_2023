<?php

$a = 1;
$b = 2;
$c = 3;
$temp = 0;

$temp = $c;
$c = $b;
$b = $a;
$a = $temp;

echo $a;
echo "\n";
echo $b;
echo "\n";
echo $c;

?>