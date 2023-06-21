<?php
include "vehicule.class.php";
include "voiture.class.php";
include "camion.class.php";


$camion = new Camion("fg-445-jf" , 2020 , "scania" , 40000);
$camion->démarrer();
$camion->avancer();

$voiture = new Voiture("gk-480-tl" , 2018 , "lamborguini" , 120000);
$voiture->démarrer();
$voiture->avancer();

echo $voiture;
echo "\n"."\n";
echo $camion;

?>