<?php
include "point.class.php";
include "rectangle.class.php";

$x=1;
$y=2;
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



$largeur = 5;
$longueur = 2;
$rect1 = new Rectangle($largeur,$longueur);
$rectangle = $rect1 -> afficherRectangle($largeur,$longueur);