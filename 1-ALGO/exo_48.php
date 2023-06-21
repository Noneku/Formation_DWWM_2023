<?php

echo "Saisir un nombre ";
$a = trim(fgets(STDIN));

$tabT = array();
$pg = 0;

for ($i=0; $i < $a ; $i++) { 
    echo "Saissez un nombre pour le tableau ";
     $tabT[$i]= trim(fgets(STDIN));
     if ($pg < $tabT[$i]) {
        $pg = $tabT[$i];
     }

}

print_r ($tabT);

echo "le plus grand chiffre est ".$pg;

?>