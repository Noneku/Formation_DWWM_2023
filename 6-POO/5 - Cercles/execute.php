<?php
include_once "point.class.php";
include_once "cercle.class.php";
// $point = new Point(1,2);
$cercle = new Cercle(1,2,3);

$cercle->afficher();
echo "\n";
echo "Perimetre:".$cercle->getPerimetre();
echo "\n";
echo "Perimetre:".$cercle->getSurface();
echo "\n";

if ($cercle->appartient()) {
    echo "Le point appartient au cercle";
} else {
    echo "le point n'appartient pas au cercle";
}