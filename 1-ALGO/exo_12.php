<?php
//Variables
$PHT = 100;
$nbArticles = 3;
$TVA = 0.20;
$TTC;

//Calcul
$TTC = $nbArticles * $PHT * (1 + $TVA);

//Affichage
echo "Le prix total est de : " . $TTC;
?>