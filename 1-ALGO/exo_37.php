<?php

$Valeurs = array(1,2,5,8);
$Valeurs2= array();


for ($i=0; $i < count($Valeurs); $i++) { //parcours le tableau 

    $Valeurs2[$i]= $Valeurs[$i]+1;

    }

print_r($Valeurs2);




?>