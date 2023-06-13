<?php

/*Saisir 3 entiers a, b, c, et déterminer dans R les racines de l'équation ax² + bx + c = 0 */
//Declaration
$a = readline("Saisir la valeur a : ");
$b = readline("Saisir la valeur b : ");
$c = readline("Saisir la valeur c : ");
// $equation = ($a*$x)^2 + ($b*$x) + $c;
$delta = ($b*$b)- 4*($a*$c);



//Instructions

if($delta > 0){

    echo "Il y a 2 racines";
    $x1 = (-$b - sqrt($delta))/(2*$a);
    $x2 = (-$b + sqrt($delta))/(2*$a);
    echo $x1;
    echo " et ";
    echo $x2;

}elseif($delta == 0){

    echo "Il y aura 1 racine";
    $x1 = -$b/(2*$a);
    echo $x1;

}else{ 
    echo"Il n'y a pas de racine";
}



?>