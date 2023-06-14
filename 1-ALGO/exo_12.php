<?php

// Ecrire un algo qui lit le prix HT d'un article, le nb d'articles et le taux de TVA et fournit le prix TTC correspondant 


// Déclaration : 
$prixHT = readline("Indiquez le prix HT de votre article : ");
$nbArticles = readline("Indiquez le nombre d'articles : ");
$TVA = 5.5/100;

// Calcul : 
$prixTotal = $prixHT*$nbArticles*(1+$TVA);

// Affichage :
echo "Prix HT : $prixHT €.";
echo "\n";
echo "Nombre d'articles : $nbArticles.";
echo "\n";
echo "Montant de la TVA : $TVA.";
echo "\n";
echo "Le prix total à régler est : $prixTotal €.";

?>