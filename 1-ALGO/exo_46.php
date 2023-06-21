<?php

$tab = array ("1","2","3","5");
print_r ($tab);
echo "Saisir un nombre ";
$a = trim(fgets(STDIN));
$i = 0;
$temp = 0;



for ($i= 0 ; $i < count($tab) ; $i++) { 


    for ($j= 0 ; $j < $i-1 ; $j++){

        if ($tab[$i] > $a) {
           $temp = $tab[$j+1];
           $tab[$j+1] = $a;
           $tab[$j] = $temp;
        }

    }
   
}
    print_r($tab);


?>