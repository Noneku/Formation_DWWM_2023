<?php
$tab = array();
$max = 0;
$pos = 0;

for ($i = 0; $i < 5; $i++) {
    $nb = readline("Entrer un nombre");
    $tab[$i] = ($nb);

    if ($tab[$i] > $max) {
        $max = $tab[$i];
        $pos = $i+1;
    }
}  
print_r($max);
echo "position:".$pos;
