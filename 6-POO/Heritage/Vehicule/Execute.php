<?php
include "Vehicule.class.php";
include "Voiture.class.php";
include "Camion.class.php";

$camion = new Camion(2022, 50000);
$voiture = new Voiture(2021, 30000);

echo "Informations sur le camion:\n";
echo $camion . "\n";
$camion->demarrer();
$camion->accelerer();

echo "\n";

echo "Informations sur le camion:\n";
echo "Matricule: " . $camion->getMatricule() . "\n";
echo "Année du modèle: " . $camion->getAnnée() . "\n";
echo "Prix: " . $camion->getPrix() . "\n";
$camion->demarrer();
$camion->accelerer();

echo "\n";

echo "Informations sur la voiture:\n";
echo "Matricule: " . $voiture->getMatricule() . "\n";
echo "Année du modèle: " . $voiture->getAnnée() . "\n";
echo "Prix: " . $voiture->getPrix() . "\n";
$voiture->demarrer();
$voiture->accelerer();

?>