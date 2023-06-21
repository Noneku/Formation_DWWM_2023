<?php

// DELTA EXO A FAIRE

// saisie des entiers 
$a = (int) readline("Entrez le premier nombre: ");
$b = (int) readline("Entrez le deuxieme nombre: "); 
$c = (int) readline("Entrez le troisième nombre: "); 


// calcul de la racine
// La fonction sqrt() est une fonction intégrée en PHP qui renvoie la racine carrée d’un nombre

$delta = ($b * $b) - (4 * $a * $c);


if ($delta < 0){

echo "n'a pas de solution";

}  elseif ($delta == 0){

echo"une unique solution est: ".-$b/(2 *$a);

} else {

echo " première solution: ".(-$b- sqrt($delta)) / (2 * $a);
echo"\n";
echo " deuxième solution : ".(-$b+ sqrt($delta)) / (2 * $a);

}

?>