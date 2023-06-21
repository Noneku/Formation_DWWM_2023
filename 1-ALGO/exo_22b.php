<?php


$nb = readline("Donner un nombre : ");
$stock = 1;
$position =1;

// Instruction

for ($i = 1; $i <= 5 ; $i++) { 
    
    $nb = readline("Donner un autre nombre : ");

    if($nb > $stock){
    $stock = $nb and $position = $i;
}
    
    
}

echo "le plus grand nombre est ".$stock."il a été saisie en ".$position." places";
echo "/n"
?>