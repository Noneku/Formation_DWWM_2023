<?php

$valeurs = readline("saisie valeurs");

$tab = array();
$pg = 0;

for ($i=0; $i< $valeurs ; $i++) { 
    $tab[$i] = readline("Entrer une note");  
    
if ($pg < $tab[$i])
    {
       $pg = $tab[$i];
       $po = $i;
     
    } 
}
var_dump($tab);

echo "$pg . $po";












?>