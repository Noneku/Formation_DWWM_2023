<?php

$nb = readline("Saisissez un nombre ");
$i=0;
$j=0;


// Instruction boucle while 

while ($i < $nb) {
    $i++;
    
    for($j=1 ; $j <= $i; $j++){
        echo $j;
    }
    echo "\n";
    }
    
 
?>