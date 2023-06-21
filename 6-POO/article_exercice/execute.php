<?php

include_once("article.class.php");

$reference = readline("Entrez la référence :");
$designation = readline("Entrez la designation :");
$prixHT = readline("Entrez le prix HT :");


$article = new Article ($reference, $designation, $prixHT);
echo $article->afficherArticle();


?>