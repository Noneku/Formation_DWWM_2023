<?php

include "cercle.class.php";


$x = readline ("Entrez l'abscisse du centre du cercle : ");
$y = readline ("Entrez l'ordonnée du centre du cercle : ");
$rayon = readline ("Entrez le rayon du cercle : ");

$cercle1 = new Cercle ($x, $y, $rayon);
echo "Le périmètre du Cercle est : " .$cercle1->getPerimetre();
echo "\n";
echo "La surface du Cercle est : " .$cercle1->getSurface();
echo "\n";

$x = readline ("Entrez l'abscisse du point : ");
$y = readline ("Entrez l'ordonnée du point : ");
$point = new Point ($x, $y);
$cercle1->appartient($point);
$cercle1 -> afficher($point);

?>