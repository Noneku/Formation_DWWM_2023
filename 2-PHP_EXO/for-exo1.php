<?php

/*

afficher les nombres pairs, entre 1 et 100

résultat attendu :

    2
    4
    6
    8
    10
    12
    14
    16
    18
    20
    ...

*/

$nb = null;

for ( $i = 1;  $i <= 100 ; $i++) {
    
    if ($i % 2 == 0) {
        
        echo $i;
        $nb++;
        echo "\n";

}

}

echo "\n";
echo "il y a : ". $nb." nombres pairs";

?>