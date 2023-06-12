<?php
// Declaration

$nbreArticle= readline("tapez votre nombre d'article : ");
$prixHT= readline("tapez le prix hors taxes : ");;
$TVA= 0.2;
$ttc= 0;
// calcul
$ttc= $nbreArticle * $prixHT * (1+$TVA);

// Affichage
echo "le prix tout taxe est = ".$ttc;
?>