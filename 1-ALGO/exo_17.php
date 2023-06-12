<?php
// Declaration

$nbre1= readline("tapez un nombre : ");
$nbre2= readline("tapez un nombre : ");
// calcul & Affichage
if (($nbre1 <0 and $nbre2 <0) or ($nbre1 >0 and $nbre2 >0) ){
    echo "le produit de vos nombres est positif";
}elseif($nbre1 ==0 or $nbre2 ==0){
    echo "le produit de vos nombres est nul";
}else{
    echo "le produit de vos nombres est negatif";
}

?>