<?php

/* Ecrire un algo qui permette la saisie d'un nombre quelconque de valeurs. 
Toutes les valeurs doivent être ensuite augmentées de 1, 
et le nouveau tableau sera affiché à l'écran */ 

//Declarations
$valeurs = readline("Saisir le nombre de valeur du tableau : ");
$tab = array();
$tab2 = array();

//Instructions

for ($i=0; $i < $valeurs ; $i++) {   

    $tab[$i] = readline("Saisir nombre : ");
    
}

for ($j=0; $j < count($tab) ; $j++) { 
        $tab2[$j] = $tab[$j]++;
}

//Affichage
print_r($tab2);

print_r($tab);


?>