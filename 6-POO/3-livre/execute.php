<?php
include "livre.class.php";

echo "Livre 1:";
echo "\n";
$Titre = readline("Donner le titre :");
$Auteur = readline("Donner l'auteur :");
$Prix = readline("Donner le prix :");
$livre1 = new Livre($Titre, $Auteur, $Prix);
$livre1->afficher();
echo "\n";

echo "Livre 2:";
echo "\n";
$Titre = readline("Donner le titre :");
$Auteur = readline("Donner l'auteur :");
$Prix = readline("Donner le prix :");
$livre2 = new Livre($Titre, $Auteur, $Prix);
$livre2->afficher();
echo "\n";

?>