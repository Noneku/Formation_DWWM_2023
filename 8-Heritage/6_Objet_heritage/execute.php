<?php

require_once "employe.classe.php";
require_once "ouvrier.classe.php";
require_once "cadre.classe.php";
require_once "patron.classe.php";

$ouvrier = new Ouvrier("AZE","Sahli","Asaad","22/07/1989","2015");
echo $ouvrier ->__toString();
echo "\nSalaire : " . $ouvrier->GetSalaire(). " "."€" .PHP_EOL;

$cadre = new Cadre("AZERTY","Belahacen","Aimane","29/07/1999",1);
echo $cadre ->__toString();
echo "\nSalaire : " . $cadre->GetSalaire(). " "."€" .PHP_EOL;

$patron = new Patron("AZERTY123","Mafhim","Moussa","29/07/1984",100000000,25);
echo $patron ->__toString();
echo "\nSalaire : " . $patron->GetSalaire() ." ". "€" ;












?>