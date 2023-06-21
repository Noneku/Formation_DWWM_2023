<?php
// Ecrire l'algorithme permettant d'imprimer le triangle suivant, le nombre de lignes étant donné par l'utilisateur:
// 1
// 12
// 123
// 1234
// 12345
// 123456
// 1234567

// Demande à l'utilisateur le nombre de lignes du triangle
$num = intval(readline("Entrez le nombre de lignes du triangle : "));

// Boucle pour générer chaque ligne du triangle
for ($i = 1; $i <= $num; $i++) 
{

// Boucle pour imprimer les chiffres de 1 à $i pour chaque ligne
for ($j = 1; $j <= $i; $j++) {
    echo $j;
    }
    echo "\n";
}

?>