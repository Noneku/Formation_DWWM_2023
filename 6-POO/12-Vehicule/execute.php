<?php


require_once ("./Camion.class.php");
require_once ("./Voiture.class.php");

$camion1 = new Camion (1995, 30000);

echo $camion1->__toString();
$camion1->demarrer();
$camion1->accelerer();

$voiture1 = new Voiture (2005, 3500);

echo $voiture1->__toString();
$voiture1->demarrer();
$voiture1->accelerer();

?>