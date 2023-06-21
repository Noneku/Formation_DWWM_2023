<?php
include './Vehicule-class.php';
include './Voiture-class.php';
include './Camion-class.php';

// Test
$voiture = new Voiture(2022, 20000);
$voiture1 = new Voiture(2023, 50000);
$voiture2 = new Voiture(2021, 15000);
$voiture3 = new Voiture(2020, 10000);
$voiture4 = new Voiture(2015, 8700);
$voiture5 = new Voiture(2014, 5000);

echo "Mercedes (Pack AMG) class A: " . $voiture . "\n";
$voiture->demarrer();
$voiture->accelerer();
echo "Audi R8 (Pack Luxe): " . $voiture1 . "\n";
$voiture1->demarrer();
$voiture1->accelerer();
echo "BMW Serie 5 (PAck M): " . $voiture2 . "\n";
$voiture2->demarrer();
$voiture2->accelerer();
echo "Opel Astra (Pack Sport): " . $voiture3 . "\n";
$voiture3->demarrer();
$voiture3->accelerer();
echo "Ford Mustang: " . $voiture4 . "\n";
$voiture4->demarrer();
$voiture4->accelerer();
echo "Nissan Skylane: " . $voiture5 . "\n";
$voiture5->demarrer();
$voiture5->accelerer();






$camion = new Camion(2022, 50000.0);
$camion1 = new Camion(2023, 50000.0);
$camion2 = new Camion(2020, 50000.0);
echo "Optimus Prime: " . $camion . "\n";
$camion->demarrer();
$camion->accelerer();
echo "Megatron: " . $camion1 . "\n";
$camion1->demarrer();
$camion1->accelerer();
echo "Bumblebee: " . $camion2 . "\n";
$camion2->demarrer();
$camion2->accelerer();











?>