<?php

include "article.class.php";

Article::$tauxTVA = readline("Précisez le taux de TVA applicable sur tous les articles : ");

$reference = readline ("Entrez la référence de l'article : ");
$designation = readline ("Précisez la désignation de l'article : ");
$prixHT = readline ("Entrez le prix HT de l'article : ");
$article1 = new Article ($reference, $designation, $prixHT);
$article1->afficherArticle();

echo "\n";

$reference = readline ("Entrez la référence de l'article : ");
$designation = readline ("Précisez la désignation de l'article : ");
$prixHT = readline ("Entrez le prix HT de l'article : ");
$article2 = new Article ($reference, $designation, $prixHT);
$article2->afficherArticle();

echo "\n";

$reference = readline ("Entrez la référence de l'article : ");
$designation = readline ("Précisez la désignation de l'article : ");
$prixHT = readline ("Entrez le prix HT de l'article : ");
$article3 = new Article ($reference, $designation, $prixHT);
$article3->afficherArticle();

echo "\n";

$reference = readline ("Entrez la référence de l'article : ");
$designation = readline ("Précisez la désignation de l'article : ");
$prixHT = readline ("Entrez le prix HT de l'article : ");
$article4 = new Article ($reference, $designation, $prixHT);
$article4->afficherArticle();
?>