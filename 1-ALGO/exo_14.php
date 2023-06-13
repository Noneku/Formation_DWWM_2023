<?php


$nbrA = readline("Saisire votre nombre 1 : ");
$nbrB = readline("Saisire votre nombre 2 : ");

if($nbrA < 0){

        if($nbrB < 0){

            echo "Le produit est positif";
        }else echo "Le produit est négatif";

}

elseif($nbrB > 0){
    echo "Le produit est positif";
}  



    // #On teste le signe du produit des deux nombres

    // if (($nb1 > 0 and $nb2 > 0) || ($nb1 < 0 and $nb2 < 0)) {
    //     echo "Le produit est positif";
    // }
    // else {
    //     echo "Le produit est négatif";
    // }


?>