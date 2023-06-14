<?php

$valeurs = readline("saisie valeurs");

$tab = array();


for ($i=0; $i< $valeurs ; $i++) { 
    $tab[$i] = readline("Entrer une note");  
    $tab[$i] = $tab[$i]+1;
    
}
print_r($tab);


?>