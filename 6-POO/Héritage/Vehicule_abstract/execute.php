<?php

include("voiture.php");
include("camion.php");
include_once("vehicule.php");


// objet 1 : voiture
$voiture = new Voiture ("45-GHJ-59", 2022, 15000);
echo $voiture->demarrer();
echo"\n";
echo $voiture->accelerer();
echo"\n";
echo $voiture->__toString();

echo"\n";
echo"\n";

// Objet 2 : camion
$camion = new Camion ("55-ELM-59", 2021, 7000);
echo $camion->demarrer();
echo"\n";
echo $camion->accelerer();
echo"\n";
echo $camion->__toString();


?>