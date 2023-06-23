<?php

// ecrire un algorythme qui déclare un tableau de 9notes, dont on fait ensuite saisir les valeurs par l'utilisateur

$tab = array () ; 

for ($i=0 ; $i < 9 ;$i++ ) {

    // $tab va prendre à chaque tour de boucle la valeur de la saisie et remplir le tableau 
    $tab[$i] = readline("entrez la note :");
}

print_r($tab);


?>