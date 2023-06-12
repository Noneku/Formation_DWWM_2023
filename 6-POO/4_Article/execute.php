<?php

include "Article.class.php";

//Création du 1er article
echo "\nArticle 1\n";
$Ref=readline("Donner la référence : ");
$Designation=readline("Donner la désignation : ");
$PrixHT=readline("Donner le prix HT : ");
$Article1=new Article($Ref,$Designation,$PrixHT,$TauxTVA);
$Article1->AfficherArticle();

//Création du 2nd article
echo "\nArticle 2\n";
$Ref=readline("Donner la référence : ");
$Designation=readline("Donner la désignation : ");
$PrixHT=readline("Donner le prix HT : ");
$Article2=new Article($Ref,$Designation,$PrixHT,$TauxTVA);
$Article2->AfficherArticle();

//Création du 3ème article
echo "\nArticle 3\n";
$Ref=readline("Donner la référence : ");
$Designation=readline("Donner la désignation : ");
$PrixHT=readline("Donner le prix HT : ");
$Article3=new Article($Ref,$Designation,$PrixHT,$TauxTVA);
$Article3->AfficherArticle();

//Création du 4ème article
echo "\nArticle 4\n";
$Ref=readline("Donner la référence : ");
$Designation=readline("Donner la désignation : ");
$PrixHT=readline("Donner le prix HT : ");
$Article4=new Article($Ref,$Designation,$PrixHT,$TauxTVA);
$Article4->AfficherArticle();

// $i=0;  
// $continu="o";

// do {
//     $i++;
//     echo "Article_".$i."\n";
//     $Ref=readline("Donner la référence : ");
//     $Designation=readline("Donner la désignation : ");
//     $PrixHT=readline("Donner le prix HT : ");
//     $Article=new Article($Ref,$Designation,$PrixHT,$TauxTVA);
//     $Article->AfficherArticle();
//     $continu=readline("Voulez vous renseigner un nouvel article o/n ");

// } while ($continu == "o");

// echo "le nombre d'article est : ".$i;