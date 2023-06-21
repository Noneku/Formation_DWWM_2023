<?php

$tab = array("d","e","c","a","l","a","g","e");
$tabModifie = array();

for ($i = 0; $i < (count($tab)-1); $i++) {
    $tabModifie[$i] = $tab[$i+1];
}
$tabModifie[(count($tab)-1)] = $tab[0];

print_r($tabModifie);

?>
   

