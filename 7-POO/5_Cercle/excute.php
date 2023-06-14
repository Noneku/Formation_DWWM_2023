<?php


include "Cercle.classe.php";

// Demande à l'utilisateur d'entrer les coordonnées du centre (point) et le rayon du cercle
echo "Donner l'abscisse du centre : ";
$abscisseCentre = readline();

echo "Donner l'ordonnée du centre : ";
$ordonneeCentre = readline();

echo "Donner le rayon : ";
$rayon = readline();

// Création et affichage
$centre = new Point($abscisseCentre, $ordonneeCentre);
$cercle = new Cercle($centre, $rayon);

echo "CERCLE : ";
$cercle->afficher();
echo "\n";

echo "Le périmètre est : " . $cercle->getPerimetre() . "\n";
echo "La surface est : " . $cercle->getSurface() . "\n";

//demander à l'utilisateur d'entrer les cordonnées du point 

echo "Donner un point:";
echo PHP_EOL ;
echo "x:";
$abscissePoint = readline();
echo "y:";
$ordonneePoint = readline();

// Création du point
$Point = new Point($abscissePoint, $ordonneePoint);

echo "POINT : ";
$Point->afficher();
echo "\n";
// vérification du point
if ($cercle->appartient($Point)) {
    echo "Le point appartient au cercle.\n";
} else {
    echo "Le point n'appartient pas au cercle.\n";
}
?>