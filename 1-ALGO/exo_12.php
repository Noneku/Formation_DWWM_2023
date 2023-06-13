<?php


$ht = readline("entré prix ht ");
$na = readline("entré nombre article ");
$tva = readline("entré tva ");

$ttc = $ht * $na + ($ht * $tva);
echo "Prix TTC = " . $ttc;
