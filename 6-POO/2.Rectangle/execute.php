<?php
include "rectangle.class.php";

$longueur=3;
$largeur=4;
$Rectangle = new Rectangle($longueur, $largeur);
$Rectangle ->afficherRectangle();
echo "\n";

echo "\n";
$longueur=5;
$largeur=5;
$Rectangle = new Rectangle($longueur, $largeur);
$Rectangle ->afficherRectangle();

echo "\n";

