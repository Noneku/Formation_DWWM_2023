<?php

$a = readline("saisir un nombre");
$b = readline("saisir un nombre");
$c = readline("saisir un nombre");
$delta =  ($b*$b) - (4*$a*$c);

if ($delta < 0) {
    echo "pas de solutions possible";
} else if ($delta == 0) {
    echo "x = ".-$b/(2*$a);
} else {
    echo "x1 =".(-$b-sqrt($delta)) / (2*$a);
    echo "\n";
    echo "x2 =".(-$b+sqrt($delta)) / (2*$a);
}

?>