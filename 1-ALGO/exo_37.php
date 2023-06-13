<?php
$tab = array();

for ($i = 0; $i < 5; $i++) {
    $nb = readline("Entrer un nombre");
    $tab[$i] = ($nb+1);
}  
print_r($tab);
