<?php
include "cercle.class.php";

$centre = new Point(1, 2);
$rayon = 3;
$cercle = new Cercle($centre, $rayon);

$cercle->afficher();
echo "\n";
echo "Le périmètre est : " . $cercle->getPerimetre() . "\n";
echo "La surface est : " . $cercle->getSurface() . "\n";

echo "Donner un point:\n";
$pointX = readline("X: ");
$pointY = readline("Y: ");
$point = new Point($pointX, $pointY);


?>