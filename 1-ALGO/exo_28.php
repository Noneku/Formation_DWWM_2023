<?php

// Ecrire un algo qui permet de faire un triangle de chiffres, avec un nombre de lignes donné par l'utilisateur 

// Déclaration : 
$nb = readline("Entrez le nombre de lignes souhaitées : ");
$i = 1;
$boucle = " ";


// Instruction : 
for ($i = 1; $i <= $nb; $i++) {
    $boucle .= $i;
    echo $boucle, "\n"; 
    }


for ($i = 1; $i <= $nb; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "\n";
}

// for ($i = $a + 1; $i <= $a + 10; $i++) {
//     echo $i . " ";
// }

?>