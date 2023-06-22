<?php

include "cercle.class.php";

$point = new Point(3, 4);
$point->afficher();

// Création d'un cercle avec un centre et un rayon
$centre = new Point(0, 0);
$cercle = new Cercle($centre, 5);
$cercle->afficher();

// Calcul et affichage du périmètre du cercle
$perimetre = $cercle->getPerimetre();
echo "Périmètre du cercle : " . $perimetre . "\n";

// Calcul et affichage de la surface du cercle
$surface = $cercle->getSurface();
echo "Surface du cercle : " . $surface . "\n";

// Vérification si le point appartient au cercle
$pointAppartient = new Point(2, 2);
if ($cercle->appartient($pointAppartient)) {
    echo "Le point appartient au cercle.\n";
} else {
    echo "Le point n'appartient pas au cercle.\n";
}

?>