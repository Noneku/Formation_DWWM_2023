<?php

require_once('Camion.php');

$camion = new Camion("313546", 1996, 452);

$camion->demarrer();
$camion->accelerer();

require_once('Voiture.php');

$voiture = new Voiture("31456", 1996, 454);

$voiture->demarrer();
$voiture->accelerer();

?>