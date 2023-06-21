<?php

include_once "vehicule.classe.php";
include_once "camion.classe.php";
include_once "voiture.classe.php";

$camion = new Camion(1,2023,"45000");

echo $camion->Démarrer();echo PHP_EOL;
echo $camion->Accélérer();echo PHP_EOL;

echo $camion->__toString();echo PHP_EOL;


$voiture = new Voiture(2,2024,"45000");

echo $voiture->Démarrer();echo PHP_EOL;
echo $voiture->Accélérer();echo PHP_EOL;

echo $voiture->__toString();






?>