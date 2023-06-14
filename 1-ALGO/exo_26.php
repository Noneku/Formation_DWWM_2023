<?php

// saisir 3 entiers a, b, c & déterminer dans R les racines de l'équation ax² + bx + c = 0

// Déclaration :
$a = readline("Entrez un nombre a : ");
$b = readline("Entrez un nombre b : ");
$c = readline("Entrez un nombre c : ");
$d = ($b*$b) - 4*($a*$c);
$x1 = -$b/(2*$a);
$x2 = (-$b-sqrt($d)/(2*$a));
$x3 = (-$b+sqrt($d)/(2*$a));


// Instruction :
if($d<0) {
    echo "L'équation '" .$a."x² + ".$b."x + " .$c." = 0' n'a pas de solution.";
} elseif ($d==0) {
    echo "La solution de l'équation : '" .$a."x² + ".$b."x + " .$c." = 0' est x = ".$x1;
} else {
    echo "Les solutions de l'équation : '" .$a."x² + ".$b."x + " .$c." = 0' sont x1 = ".$x2." et x2 = ".$x3;
}

?>