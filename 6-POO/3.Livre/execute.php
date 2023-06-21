<?php
include "livre.class.php";

$titre= readline("Saisissez un titre de livre : ");
$auteur= readline("Saisissez le nom de l'auteur : ");
$prix = readline('Saisissez le prix du livre : ');
$livre = new Livre($titre, $auteur, $prix);
$livre ->Afficher();
echo "\n";


echo "\n";

