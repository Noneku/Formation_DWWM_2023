<?php
// Declaration

$nbre= readline("tapez un nombre : ");

// calcul & Affichage
if ($nbre<0) {
    echo "votre nombre est negatif";
}elseif($nbre>0){
    echo "votre nombre est positif";
}else{
    echo "votre nombre est 0";
}



?>