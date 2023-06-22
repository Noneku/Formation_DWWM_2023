<?php
$a = 0;
$b = 0;
$c = 0;


$a = 3;
$b = 10;
$c = $a + $b;
$b = $b + $a;
$a = $c;

echo $a;
echo $b;
echo "\n";
echo $c;

?>