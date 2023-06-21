<?php
$valeur = readline("saisissez valeur");
$tab = array();

for ($i=0; $i < $valeur; $i++) { 
    $tab[$i] = readline("entrez une note");
    $tab[$i]+=  1 ;
}

    


print_r($tab);

?>