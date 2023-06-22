<?php

//Déclaration variables
$a = 1;
$b = 2;
$c = 3;
$temp = 0;

//Formule
$temp = $b;
$b = $a;
$a = $c;
$c = $temp;

//Affichage
echo "A obtient = ".$a;
echo "\n";
echo "B obtient = ".$b;
echo "\n";
echo "C obtient = ".$c;




?>