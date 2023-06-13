<?php
/* Ecrire l'algorithme permettant d'imprimer le triangle suivant, le nombre de lignes étant donné par l'utilisateur*/

//Declaration
$ligne = readline("Saisir le nombre ligne : ");
$i = 0;

//Instruction

while ($i < $ligne) {
    //Affectation du nombre de ligne
    $i++;

    
    for ($j = 1; $j <= $i; $j++) {
        //Reprend le nombre $i pour boucler autant de fois qu'il y a de chiffre à faire sur la ligne avec $j++ pour incrémenter le chiffre.
        echo $j;
    }
    //Saut de ligne à la fin de l'écriture des chiffres
    echo "\n";
}
