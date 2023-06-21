<?php

/*déclaration*/;

$nb = readline('Saisie le nombre article ');
$tva = readline('Saisie Taux TVA en pourcentage ');
$prix = readline('Saisie le prix ');

//calcul 


$MTva  = $prix*($tva/100)*$nb;
$PrixTTC= $nb*$prix*(($tva/100)+1);



// resultat

echo "le prix HT est  ".$prix*$nb," €";
echo "\n";
echo "le Taux de TVA est  ".$tva,"%";
echo "\n";
echo "la TVA est  ".$MTva," €";
echo "\n";
echo "Le prix total est ".$PrixTTC," €";


 ?>
 