<?php
// declaration de variables

$prixHt = readline("le prix hors taxe d'un article est ");
$nbrArticle = readline("entrez le nombre d'article");
$tauxTva = 0.20;


// calcul

$prixTtc = $nbrArticle * $prixHt *(1+$tauxTva);

// affichage 

echo $prixTtc ;


?>