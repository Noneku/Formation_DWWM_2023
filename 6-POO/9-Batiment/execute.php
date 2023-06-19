<?php
include "Batiment.class.php";
include "Maison.class.php";

//création d'objet Maison
    $adresse = "1 rue du molinel";
    $superficie = 120;
    $nbPieces = 7;
    $maison = new Maison($adresse, $superficie, $nbPieces);

//Création Objet Batiment
    $adresse = "2 rue tata" ;
    $superficie = "200";
    $bat = new Batiment($adresse, $superficie);



print_r($maison);
echo "\n";
print_r($bat);


echo $bat;
echo "\n";
echo $maison;
