<?php

// Ecrire un algo qui permet la saisie d'un nombre quelconque de valeurs ; ces valeurs doivent ensuite être augmentées de 1 et apparaître dans un nouveau tableau 

// Déclaration :
$nbVal = readline("Entrez le nombre de valeurs que vous voulez saisir : "); 
$tab1 = array();
$tab2 = array();


// Instruction : 
for ($i = 0; $i < $nbVal; $i++) {
    $tab1[$i] = readline("Entrez votre valeur : ");
    $tab2[$i] = $tab1[$i]+1;
}


// Affichage :
print_r($tab1);
print_r($tab2);

?>