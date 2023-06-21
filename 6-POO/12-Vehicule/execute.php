<?php
include "Vehicule.class.php";
include "Voiture.class.php";
include "Camion.class.php";

$camion =new Camion("2001",170000.50);
$voiture = new Voiture("2017",50000);

echo $voiture;
echo "\n";
$voiture->Demarrer();
echo "\n";
$voiture->Accelerer();
echo "\n";
echo "\n";
echo $camion;
echo "\n";
$camion->Demarrer();
echo "\n";
$camion->Accelerer();


?>