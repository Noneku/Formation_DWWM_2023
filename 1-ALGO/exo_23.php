<?php


$nb = readline("Donner un nombre : ");
$stock = 1;
$position=1;
$i = 1;

// Instruction donner le plus grand nombre et donner sa position de saisie

while ($nb <> 0) { 
    if($nb > $stock){
    $stock = $nb;
    $position = $i;
}
$nb = readline("Donner un autre nombre : ");
$i++;}
echo "le plus grand nombre est ".$stock."il a été saisie en ".$position." places";

?>