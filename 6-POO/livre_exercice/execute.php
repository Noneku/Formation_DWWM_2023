<?php

include_once("livre.class.php");

$Titre = readline ("Donner le titre : ");
$Auteur = readline ("Donner l'auteur :");
$Prix = readline ("Donner le prix : ");

$livre = new Livre ($Titre, $Auteur, $Prix);
$livre1 = $livre->titre();
echo " Le titre est : ".$livre1;
echo "\n";
$livre1 = $livre->auteur();
echo " L'auteur est : ".$livre1;
echo "\n";
$livre1 = $livre->prix();
echo " Le prix est : ".$livre1;
echo "\n";
$livre1 = $livre->afficher();
echo $livre1;

?>