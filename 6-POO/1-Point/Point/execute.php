<?php
include "point.class.php";

$x=2;
$y=3;
$pt1 = new Point($x, $y);
$distance = $pt1->norme();
echo $distance;


echo "\n";
$x=3;
$y=5;
$pt2 = new Point($x, $y);
$distance = $pt2->norme();
echo $distance;
echo "\n";

print_r($pt1);
print_r($pt2);
