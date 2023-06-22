<?php
include "Livre.class.php";

echo "Livre 1:\n";
$livre1 = new Livre("Programmer en C", "Claude Delannoy", 350);
echo "Le titre est " . $livre1->getTitre() . "\n";
echo "L'auteur est " . $livre1->getAuteur() . "\n";
echo "Le prix est " . $livre1->getPrix() . "\n";
$livre1->afficher();

echo "\nLivre 2:\n";
$livre2 = new Livre("Programmer en Java", "Claude Delannoy", 450);
$livre2->afficher();