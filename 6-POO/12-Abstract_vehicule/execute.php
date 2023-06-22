<?php
include_once "Véhicule.class.php";
include_once "Voiture.class.php";
include_once "Camion.class.php";

    $voiture = new Voiture(2023, 50000);
    $camion = new Camion(2022, 80000);
    
    // Tester les fonctions
    echo $voiture;
    $voiture->demarrer();
    $voiture->accelerer();
    
    echo "\n";
    
    echo $camion;
    $camion->demarrer();
    $camion->accelerer();
    
?>