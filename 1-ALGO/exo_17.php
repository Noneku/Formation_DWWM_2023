<?php

/* EXO 17 : Ecrire un algo qui demande deux nombres à l'utlisateur et l'informe ensuite si le produit est négatif ou positif. 
( on inclut cette fois le traitement du cas où le produit peut être nul).*/

$a = readline("entrer un nombre");

if ($a == 0) {
    echo "ce nombre est null";
} else if ($a > 0) {
    echo "ce nombre est positif";
} else if ($a < 0) {
    echo "ce nombre est negatif";
}

?>