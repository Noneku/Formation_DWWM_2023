<?php

$A = readline("Entrer un nombre A : ");
$B = readline("Entrer un nombre B : ");
$C = readline("Entrer un nombre C : ");

// Delta = B² - 4ac
$delta = $B * $B -4 * $A * $C; //Reponse = Discriminant
echo $delta."\n";

if($delta > 0 || $delta = 0){

    $result = -$B + sqrt($delta) / 2 * $A;
    echo $result;
}else{
    echo "Equation Impossible";
    
}
?>