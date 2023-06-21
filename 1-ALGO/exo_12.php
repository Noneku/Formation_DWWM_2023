

<?php

//les variables

$prixHt =0;
$na = 0;
$tva =0.2;
$ttc;
//demande a l'utilisateur d'entrer le prix HT et le nombre d'article
$prixHT = readline ("Entrez le prix HT: ");
$nombreArticle = readline ("Entrez le nombre d'article:  ");
$tauxTVA = 0.20;
//on teste
$ttc = $nombreArticle * $prixHT * (1 + $tauxTVA);
//affichage
echo $prixHT;
echo "\n";
echo $nombreArticle;
echo "\n";
echo " le prix TTC est de :". $ttc ."€";

?>
