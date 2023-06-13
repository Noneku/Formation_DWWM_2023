<?php
$a = 0;
$b = 0;
$c = 0;

$a = 3;
$b = 10;
$c = $a + $b;
$b = $a + $b;
$a = $c;

echo "A=".$a;
echo "\n";
echo "B=".$b;
echo "\n";
echo "C=".$c;

//13

?>