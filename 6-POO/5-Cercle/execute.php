<?php
include "point.class.php";
include "cercle.class.php";

$x = readline("Saisir l'abscisse x du centre : ");
$y = readline("Saisir l'abscisse y du centre : ");
$rayon = readline("Saisir le rayon du cercle : ");

$centre = new Point($x, $y);
$cercle = new Cercle($centre, $rayon);

$distance = $centre->norme();
$perimetre = $cercle->getPerimetre();
$surface = $cercle->getSurface();

$x2 = readline("Saisir l'abscisse x du point à vérifier : ");
$y2 = readline("Saisir l'abscisse y du point à vérifier : ");
$point2 = new Point($x2, $y2);
$appartientAuCercle = $cercle->appartient($point2);



echo "Le périmètre du cercle ";
echo " est : " . $perimetre . "\n";

echo "La surface du cercle ";

echo " est : " . $surface . "\n";

echo $point2->afficher();
if ($appartientAuCercle) {
    echo " appartient au cercle ";
} else {
    echo " n'appartient pas au cercle ";
}
$cercle->afficher();
echo "\n";



