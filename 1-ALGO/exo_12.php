<?php


$ht = readline("Saisissez le prix hors taxe : ");
$na = readline("Saisissez un nombre d'article : ");
$tva = 5.5/100;

$ttc = $na*$ht*(1+$tva);

echo "le prix TTC est de : ".$ttc." eruos";
echo "\n";
echo "pour ".$na." article(s)";
echo "\n";
echo "au prix de ".$ht." euros hors taxe";



?>