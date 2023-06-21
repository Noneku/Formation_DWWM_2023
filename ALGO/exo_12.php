<?php

/*variable*/
$article = 1;
$prixht = 5;
$totaltva = 20/100; 
$pttc = $article + $totaltva;

$prixht = readline("entrer le prix hors taxes");
echo "le prix ht est: $prixht";


$article = readline("entrer le nombre d'article");
echo "le nombre article est: $article";

$totaltva = readline("entrer le taux TVA");
echo "La tva : $totaltva";



$pttc = $article * $prixht * (1 + $totaltva);
?>