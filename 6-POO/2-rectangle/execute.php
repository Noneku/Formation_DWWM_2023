<?php
include "rectangle.class.php";

echo "Rectangle 1";
echo "\n";
$Longeur = 6;
$Largeur = 4;
$rc1 = new Rectangle($Longeur , $Largeur);
$peri = $rc1->perimetre();
echo $peri;
echo "\n";
$a = $rc1->aire();
echo $a;
echo "\n";
$c = $rc1->estCarre();
echo $c;
echo "\n";
$affiche = $rc1->afficherRectangle();
echo $affiche;
echo "\n";

echo "\n";
echo "Rectangle 2";
echo "\n";
$Longeur = 5;
$Largeur = 5;
$rc2 = new Rectangle($Longeur , $Largeur);
$peri = $rc2->perimetre();
echo $peri;
echo "\n";
$a = $rc2->aire();
echo $a;
echo "\n";
$c = $rc2->estCarre();
echo $c;
echo "\n";
$affiche = $rc2->afficherRectangle();
echo $affiche;

?>