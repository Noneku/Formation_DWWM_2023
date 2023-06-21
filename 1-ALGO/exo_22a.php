<?php


$nb = readline("Donner un nombre : ");
$stock = 1;

// Instruction donner le plus grand nombre 

for ($i = 1 ; $i <= 20  ; $i++) { 
    
    echo "Donner un autre nombre";
    $nb = readline("Donner un nombre : ");

    if($nb > $stock){
    $stock = $nb;
}
    
    echo "le plus grand nombre est".$stock;
}
?>