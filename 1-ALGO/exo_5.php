<?php 

// Afficher les valeurs des variables a et b après exécution des instructions 

// Déclaration des variables :
$a = 5;
$b = 2;
$temp = 0;

// Execution :
$temp = $a;
$a = $b;
$b = $temp;

// Affichage :
echo "a = " .$a;
echo "\n";
echo "b = " .$b;


?>