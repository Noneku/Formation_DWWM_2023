<?php

echo "Saisir un nombre ";
$a = trim(fgets(STDIN));

$tabT = array();
$nbrI = 0;
$nbrP = 0;

for ($i=0; $i < $a ; $i++) { 
    echo "Saissez un nombre pour le tableau ";
     $tabT[$i]= trim(fgets(STDIN));
     if ($tabT[$i] % 2) {
        $nbrI += 1;
     }else {
        $nbrP += 1;
     }
     
}

print_r ($tabT);

echo "il y a ".$nbrI." nombres impair et ".$nbrP. " nombres pair";

?>