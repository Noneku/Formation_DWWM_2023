<?php

include "tva.class.php";

// Programme de test


Article::$tauxTVA("Indiquez votre taux de TVA :");

$Reference = readline("Donner la ref :");
$Designation = readline("Donner la désignation :");


$article1 = new Article($Reference, $Designation);
$article1->setPrixHT(100);
$article1->afficherArticle();

echo "\n";

$Reference = readline("Donner la ref :");
$Designation = readline("Donner la désignation :");
$article2 = new Article($Reference, $Designation);
$article2->setPrixHT(50);
$article2->afficherArticle();

?>