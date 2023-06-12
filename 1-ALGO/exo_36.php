<?php

$Valeurs = array(1,2,5,8);
$Valeurs2= array(2,3);
$somme=0;

for ($i=0; $i < count($Valeurs2); $i++) { //parcours le tableau $Valeurs2

    for ($j=0; $j < count($Valeurs); $j++) { //parcours le tableau $Valeurs

        $somme+=$Valeurs2[$i]*$Valeurs[$j]; //effectue le calcul.
       

    }

 }
echo $somme;




?>