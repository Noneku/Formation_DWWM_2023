<?php

$num = intval(readline("Entrez le nombre de lignes du triangle : "));

for ($i = 1; $i <= $num; $i++) {
    
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "\n";
}
