<?php

// variable
echo "saisir nombre";
$nbre = (fgets(STDIN));
$condition = $nbre < 0 ;

// conditions


if ($condition) {

    echo "le nombre est négatif";
    
}


else {
    echo "le nombre est positif";
}


?>