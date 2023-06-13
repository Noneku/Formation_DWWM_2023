<?php
include_once "article.class.php";

// $TauxTVA = readline("Donner la TVA: ");
$nbArticle = 2;

for ($i = 1; $i <= $nbArticle; $i++) {
    ${"Article" . $i} = new Article(
        $Reference = readline("Donner la référence: "),
        $Designation = readline("Donner la designation: "),
        $PrixHT = readline("Donner le PrixHT ")
    );
}

for ($i = 1; $i <= $nbArticle; $i++) {
    echo "Article $i: " . "\n";
    ${"Article" . $i}->afficherArticle() . "\n";
    echo "\n";
}
echo "Nombre d'article: " . Article::$cpt;
