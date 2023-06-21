<?php

include_once "Maison.classe.php";
include_once "Batiment.classe.php";

$maison = new Maison("3 bis rue Marceau", "60m²", 3);

echo $maison->__toString();echo PHP_EOL;

$Batiment = new Batiment("3 bis rue Marceau", "60m²");

echo $Batiment->__tostring();
?>
