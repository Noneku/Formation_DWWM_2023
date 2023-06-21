<?php
include "article.class.php";

$TauxtTVA= readline("Saisissez le taux de TVA : ");
$Référence = 0;
$Désignation = " ";
$PrixHT = 0;
$article = new afficherArticle($Référence, $Désignation, $PrixHT, $TauxTVA);
$article->afficherArticle();

echo "\n";




echo "\n"

?>