<?php
include "vehicule.class.php";
include "voiture.class.php";
include "camion.class.php";


$camion = new Camion("ET-845-JH" , 2020 , "Mercredes" , 11000);
$camion->démarrer();
$camion->avancer();

$voiture = new Voiture("DE-956-JL" , 2018 , "Clio" , 13000);
$voiture->démarrer();
$voiture->avancer();

echo $voiture;
echo "\n"."\n";
echo $camion;

?>