<?php


$nb = TRIM (fgets(STDIN));
$produit = 1;

// Instruction

for ($i = 1 ; $i <= $nb  ; $i++) { 
    
    $produit = $produit * ($i);
}
    echo $produit

?>