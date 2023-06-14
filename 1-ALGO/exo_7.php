<?php

// On dispose de trois variables a, b et c. Ecrire un algo transferant à B la valeur de A, à C la valeur de B et à A la valeur de C

 // Déclaration des variables :
$a = 1;
$b = 2;
$c = 3;
$temp = 0;

// Executions :
$temp = $a;
$b = $a;
$a = $c;
$temp = $c;

// Affichage :
echo "a = " .$a;
echo '\n';
echo "b = " .$b;
echo '\n';
echo "c = " .$c;

?>