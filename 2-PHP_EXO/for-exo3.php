<?php

/*

afficher les nombres non divisibles par 3, entre 1 et 100

résultat attendu :

    1
    2
    4
    5
    7
    8
    10
    11
    13
    14
    ...

*/


$nb = null;

for ( $i = 1;  $i <= 100 ; $i++) {
    
    if ($i % 3 !== 0) {
        
        echo $i;
        $nb++;
        echo "\n";

} 

}

echo "\n";
echo "il y a : ". $nb." nombres non divisibles pas 3";

?>