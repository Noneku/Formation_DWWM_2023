<?php

$nombreA = 0;
$nombreB = 0;
$moyenne = 0;

$nombreA = readline ("entrer la valeurA:");

$nombreB = readline ("entrer la valeurB:");

$moyenne = ( $nombreA + 2 * $nombreB )/3;

if($moyenne >= 10){
echo ("vous avez reussi");
}

else {
    echo ("vous avez échoué");
    }


?>