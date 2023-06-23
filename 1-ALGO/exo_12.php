<?php

// Calcul de la TVA
$prixHT = readline ("Entrez le prix HT: ");
$nombreArticle = readline ("Entrez le nombre d'article:  ");
$tauxTVA = 0.20;
$ttc = $nombreArticle * $prixHT * (1 + $tauxTVA);

echo $prixHT;
echo "\n";
echo $nombreArticle;
echo "\n";
echo " le prix TTC est de :". $ttc ."€";


?>