<?php
include_once "vehicule.class.php";
include_once "voiture.class.php";
include_once "camion.class.php";

$voiture1 = new Voiture("FR",2015,25000);
$voiture2 = new Voiture("FR",2015,25000);
$camion1 = new Camion("FR",2015,25000);
$camion2 = new Camion("FR",2015,25000);
$camion3 = new Camion("FR",2015,25000);

echo $voiture2;
echo "\n";
echo $camion2;
echo $voiture2->demarrer();
echo "\n";
echo $camion2->accelerer();