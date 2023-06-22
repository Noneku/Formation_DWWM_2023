<?php
include("./cercle.class.php");
include("../Point/point.class.php");

$readline = readline("Donner l'abscisse du centre : ");
$Acentre = $readline;

$readline = readline("Donner l'ordonné du centre : ");
$Ocentre = $readline;

$readline = readline("Donner le rayon : ");
$rayon = $readline;

//Instanciation
$cercle = new Cercle($Acentre, $Ocentre, $rayon);

//Afficher Perimétre

echo "Le périmétre est de : " . $cercle->getPerimetre() . "\n";
echo "La surface est de : " . $cercle->getSurface() . "\n";

//Creation Point
$readline = readline("Donner x du point : ");
$x = $readline;

$readline = readline("Donner y du point : ");
$y = $readline;

//Instanciation
$point = new Point($x, $y);

//Check si le point appartient au Cercle

echo ($cercle->appartient($point));

?>