<?php
include '../Functions/cercle.php';

$c1 = new cercle(5, 10, 15);
$p1 = new Point(5, 10);
print_r($c1);

$pt1 = $c1->getcentre();
$pt2 = $c1->getPerimetre();
$pt3 = $c1->getSurface();
$pt4 = $c1->appartient($p1);
echo 'Le périmetre est de '. $pt2;
echo PHP_EOL;
echo 'La surface est de'. $pt3;
echo PHP_EOL;
echo 'Il appartient'. $pt4;
echo PHP_EOL;
echo $pt1 -> norme();



?>