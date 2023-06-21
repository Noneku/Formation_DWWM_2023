<?php
include "cercle.class.php";

// Création d'un point
$point = new Point(2, 3);
echo $point->afficher(); // Affiche "POINT(2,3)"

// Création d'un cercle avec un rayon de 5 et le point comme centre
$cercle = new Cercle($point, 5);
echo $cercle->afficher(); // Affiche "CERCLE(2,3,5)"

// Calcul du périmètre et de la surface du cercle
echo $cercle->getPerimetre(); // Affiche le périmètre du cercle
echo $cercle->getSurface(); // Affiche la surface du cercle

// Création d'un autre point
$autrePoint = new Point(4, 6);

// Vérification si le point appartient au cercle
if ($cercle->appartient($autrePoint)) {
    echo "Le point appartient au cercle";
} else {
    echo "Le point n'appartient pas au cercle";
}