<?php

// Variables

$prixHT = readline("Inserez le prix Hors taxe : ");
$nbArticles= readline("Insérez le nombre d'Articles :  ");
$tva = readline("Insérez le taux de TVA : ");

// Calcul

$ttc = $nbArticles * $prixHT *(1 + $tva);

// Affichages

echo "le prix total est de : " . $ttc;

?>