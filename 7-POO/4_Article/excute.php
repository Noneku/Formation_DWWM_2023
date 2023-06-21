<?php

include "Article.classe.php";





// Premier objet:
// Déclaration des attributs
$reference = readline("Donner la référence: ");
$designation = readline("Donner la désignation: ");
$prixHT = readline("Donner le prix HT: ");

$article1 = new Article("11", "AT", 100);
// Appeler la méthode afficherArticle pour afficher
$article1->afficherArticle()."\n";

// Deuxieme objet:
// Déclaration des attributs
$reference = readline("Donner la référence: ");
$designation = readline("Donner la désignation: ");
$prixHT = readline("Donner le prix HT: ");

$article2 = new Article("111", "ATA", 122);
// Appeler la méthode afficherArticle pour afficher
$article2->afficherArticle()."\n";


// Troisieme objet:
// Déclaration des attributs
$reference = readline("Donner la référence: ");
$designation = readline("Donner la désignation: ");
$prixHT = readline("Donner le prix HT: ");

$article3 = new Article("122", "RER", 90);
// Appeler la méthode afficherArticle pour afficher
$article3->afficherArticle()."\n";








$article3->afficherArticle()."\n";



// Obtenir et Afficher le nombre total d'articles
$nombreTotalArticles = Article::getNombreArticles();
echo "Nombre total d'articles : " . $nombreTotalArticles . "\n";

?>