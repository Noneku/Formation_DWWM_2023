<?php
include_once "batiment.class.php";
include_once "maison.class.php";

$maison = new Maison("35 adresse",200,3);
$bat = new Batiment("34 adresse",200);

echo $maison->__toString();
echo "\n";
echo $bat->__toString();