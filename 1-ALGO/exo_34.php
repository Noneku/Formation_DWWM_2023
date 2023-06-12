<?php

$tab = [1,2,3,4,5];
$result = 0;
for ($i=0; $i < count($tab); $i++) { 
    $result += $tab[$i];
}

echo "La somme du tableau est de : $result";
?>