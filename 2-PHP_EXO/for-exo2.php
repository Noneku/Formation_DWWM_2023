<?php

/*

afficher les nombres divisibles par 3, entre 1 et 100

résultat attendu :

    3
    6
    9
    12
    15
    18
    21
    24
    27
    30
    ...

*/

$nb = null;

for ( $i = 1;  $i <= 100 ; $i++) {
    
    if ($i % 3 == 0) {
        
        echo $i;
        $nb++;
        echo "\n";

}

}

echo "\n";
echo "il y a : ". $nb." nombres divisible par 3";

?>

