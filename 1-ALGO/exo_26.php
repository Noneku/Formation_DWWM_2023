<?php

$a = readline("Saisissez un premier nombre : ");
$b = readline("Saisissez un deuxieme nombre: ");
$c = readline("Saisissez un troisième nombre: ");
$delta = ($b*$b-(4*$a*$c));

// Instruction ressoudre un eequation
if ($delta > 0 ) {
    $x1 = ($b-sqrt($delta))/(2*$a);
    $x2 = ($b+sqrt($delta))/(2*$a);
    echo "Les solutions sont x1 = ".$x1."& x2 = ".$x2;
}elseif ($delta == 0 ) {
    $x = -$b/(2*$a);
    echo "La solution est x = ".$x;
}else{
    echo "il n'y a pas de solution";
}




?>