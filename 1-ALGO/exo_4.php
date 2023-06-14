<?php

// Afficher les valeurs des variables a, b et c après exécution des instructions 


// Déclaration des variables :
$a = 3;
$b = 10;

// Execution :
$c = $a + $b;
$b = $a + $b;
$a = $c;

// Affichage :
echo "a = " .$a;
echo "\n";
echo "b = " .$b;
echo "\n";
echo "c = " .$c;


?>