<?php
//Déclaration
$prixHt = readline("Saisir le prix de l'article : ");
$nbrArticles = readline("Saisir le nombre d'articles : ");
$tva = 0.2;

//Instruction
$prixTotalTtc = $nbrArticles * $prixHt * (1 + $tva)." € TTC";

//Affichage
echo "Le prix d'un article est de ".$prixHt." € HT";
echo"\n";
echo "Le taux de TVA est de $tva ";
echo "\n";
echo "Pour $nbrArticles articles, le prix est de ".$prixTotalTtc;


?>