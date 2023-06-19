<?php
include "point.class.php";
include "rectangle.class.php";
// $x=1;
// $y=2;
// $pt1 = new Point($x, $y);
// $distance = $pt1->norme();
// echo $distance;


// echo "\n";
// $x=3;
// $y=5;
// $pt2 = new Point($x, $y);
// $distance = $pt2->norme();
// echo $distance;
// echo "\n";

// print_r($pt1);
// print_r($pt2);

echo "\n";
echo "rectangle 1";
$longueur=3;
$largeur=4;
echo "\n";
$rectangle = new Rectangle($longueur,$largeur);
$perimetre = $rectangle->perimetre();
echo "\n";
$aire = $rectangle->aire();
echo "\n";
echo $perimetre;
echo "\n";
echo $aire;
echo "\n";
$rectangle->afficherRectangle();
echo "\n";
echo "\n";

echo "rectangle 2";
echo "\n";
$longueur=5;
$largeur=5;
$rectangle2=new Rectangle($longueur,$largeur);
echo "\n";
$rectangle2->afficherRectangle();
echo "\n";
