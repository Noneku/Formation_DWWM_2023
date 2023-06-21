<?php


$nb = 0;
$stock = 1;
$position=1;
$i = 1;

// Instruction même chose que le 23
do{
    $i++;
    $nb = readline("Donner un  nombre : ");
    
    if($nb > $stock){
    $stock = $nb;
    $position = $i;
    }}
while ($nb <> 0);
    echo "Le plus grand nombre est ".$stock." il a été saisie en ".$position." places";

        // Affichage



?>