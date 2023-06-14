<?php

//on declare et saisie les variables
$nbrDepart = readline("Entrez un nombre de départ : ");

// on teste 

$factorial = 1;
for ($i = 1; $i <= $nbrDepart; $i++) {
    $factorial *= $i;       
}       

echo "La factorial de $nbrDepart c'est : $factorial\n";

?>