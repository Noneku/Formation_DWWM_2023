<?php
include_once "batiment.class.php";
include_once "maison.class.php";

// Test de la class Maison 
$maison = new Maison("20 rue du Luxembourg", "150m", 5);
$adresse = $maison-> getAdresse();
$superficie = $maison-> getSuperficie();
$nbPieces= $maison-> getNbPieces();
echo $maison;


// Test de la class Batiment 
$batiment = new Batiment("20 rue du Luxembourg", "150m", 5);
$adresse = $batiment-> getAdresse();
$superficie = $batiment-> getSuperficie();
echo $batiment;


