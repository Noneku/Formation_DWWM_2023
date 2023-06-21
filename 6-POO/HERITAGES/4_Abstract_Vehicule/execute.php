<?php
include_once "vehicule.class.php";
include_once "voiture.class.php";
include_once "camion.class.php";

// Exemple d'exécution
$voiture = new Voiture(2022, 25000);
echo "Voiture: " . $voiture . PHP_EOL;

$camion = new Camion(2021, 50000);
echo "Camion: " . $camion . PHP_EOL;

$voiture->demarrer(). "\n";

$voiture->accelerer(). "\n";

$camion->demarrer(). "\n";

$camion->accelerer(). "\n";


