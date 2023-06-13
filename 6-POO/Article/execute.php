<?php 
include("./article.class.php");

// $article1 = new Article("Pelle",555,"PERF",100);
// $article1->CalculerPrixTTC();
// $article1->afficherArticle();

// $article2 = new Article("Yoyo",555,"MPOL",100);
// $article2->CalculerPrixTTC();
// $article2->afficherArticle();

// $article3 = new Article("Canette",555,"HGTR",100);
// $article3->CalculerPrixTTC();
// $article3->afficherArticle();

// $article4 = new Article("Jeux",555,"BVMLD",100);
// $article4->CalculerPrixTTC();
// $article4->afficherArticle();

$store = [];

$activate = true;

$readLine = readline("Vouslez-vous référencer un Article ? y/n \n");

while ($activate) {

    $readLine = readline("Entrer un nom d'Article : \n");
    $nom = $readLine;

    $readLine = readline("Entrer une référence : \n");
    $reference = $readLine;

    $readLine = readline("Entrer une désignation : \n");
    $designation = $readLine;

    $readLine = readline("Entrer un Prix HT : \n");
    $prixHT = $readLine;

    $object = new Article($nom,$reference, $designation, $prixHT);

    array_push($store, $object);
    
    $object = "";

    $readLine = readline("Voulez-Vous continuer ? y/n");

    if($readLine != "y"){
        foreach ($store as $key => $value) {
            echo $key . $value;
        }
    }

}
?>

