<?php
//Saisir 3 entiers a,b,c et déterminer dans R les racines de l'équation ax² + bx + c = 0.

// Coefficients de l'équation

$a = readline("saisir un nombre");
$b = readline("saisir un nombre");
$c = readline("saisir un nombre");

// Calcul 
$delta = ($b * $b) - (4 * $a * $c);
if ($delta < 0){
echo "n'a pas de solution";
}

elseif ($delta == 0){
echo"une unique solution est: ".-$b/(2 *$a);
}

else {

echo"première solution: ".(-$b- sqrt($delta)) / (2 * $a);
echo"\n";
echo"deuxième solution : ".(-$b+ sqrt($delta)) / (2 * $a);

}


?>