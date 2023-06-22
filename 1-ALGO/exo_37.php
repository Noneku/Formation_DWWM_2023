<?php

$lt = readline("Entrez la valeur pour la longueur du tableau");

$tab1 = array();
$tab2 = array();

for ($i=0; $i < $lt; $i++) { 
    $tab1[$i] = readline("entrez un nombre dans le tableau : ");
        $tab2[$i] = $tab1[$i] + 1;
    
}



print_r($tab1);
print_r($tab2);




?>