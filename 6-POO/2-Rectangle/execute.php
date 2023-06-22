<?php
include "Rectangle.class.php";

$rectangle1 = new Rectangle(3, 4);

echo "Rectangle 1\n";
echo "Le périmètre est " . $rectangle1->perimetre() . "\n";
echo "La surface est " . $rectangle1->aire() . "\n";
echo $rectangle1->estCarre() ? "C'est un carré\n" : "Ce n'est pas un carré\n";

// Création d'une autre instance de la classe Rectangle
$rectangle2 = new Rectangle(5, 5);

echo "Rectangle 2\n";
echo $rectangle2->afficherRectangle() . "\n";
?>