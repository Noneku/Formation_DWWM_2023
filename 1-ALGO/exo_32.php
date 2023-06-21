<?php

// ecrire un algorythme qui déclare un tableau de 9notes, dont on fait ensuite saisir les valeurs par l'utilisateur

$tab = array () ; 

for ($i=0 ; $i < 9 ;$i++ ) {

    $tab[$i] = readline("entrez la note :");
}

print_r($tab);


?>